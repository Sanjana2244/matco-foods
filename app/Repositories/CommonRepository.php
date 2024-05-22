<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CommonRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function setModel(Model $model)
    {
        $this->model = $model;
    }
    
    function endsWith( $haystack, $needle ) {
        $length = strlen( $needle );
        if( !$length ) {
            return true;
        }
        return substr( $haystack, -$length ) === $needle;
    }

    // Get data for datatable
    public function getData($request, $with, $withCount, $joins, $whereChecks, $whereOps, $whereVals, $searchableCols, $orderableCols)
    {
        $start = $request->start ?? 0;
        $length = $request->length ?? 10;
        $filter = $request->search;
        $order = $request->order;
        $search = optional($filter)['value'] ?? false;
        $sort = optional($order)[0]['column'] ?? false;
        $dir = optional($order)[0]['dir'] ?? false;
        $from = $request->date_from;
        $to = $request->date_to;


        $data = $this->model->with($with)->withCount($withCount);

        if($whereChecks){
            foreach($whereChecks as $key => $check){
                if(isset($whereVals[$key])) {
                    if($this->endsWith($check, 'date')) {
                        $data->whereDate($check, $whereOps[$key] ?? '=', $whereVals[$key]);
                    } else {
                        $data->where($check, $whereOps[$key] ?? '=', $whereVals[$key]);
                    }
                }
            }
        }
        $recordsTotal = $data->count();

        if($from){
            $from = date('Y-m-d', strtotime($from));
            $data->whereDate('created_at' ,'>=', $from);
        }
        if($to){
            $to = date('Y-m-d', strtotime($to));
            $data->whereDate('created_at' ,'<=', $to);
        }

        if($search){
            $data->where(function($query) use ($searchableCols, $search){
                foreach($searchableCols as $col){
                    if(is_array($col)) {
                        $col = implode(', ', $col);
                        $query->orWhere(DB::raw('CONCAT_WS(" ", '.$col.')'), 'like' , "%$search%");
                    } else {
                        $query->orWhere($col, 'like' , "%$search%");
                    }
                }
            });
        }
        $recordsFiltered = $data->count();

        if($dir){
            if(in_array($sort, $orderableCols)){
                $orderBy = $sort;
            } else {
                $orderBy = $orderableCols[$sort];
            }
            $data->orderBy($orderBy, $dir);
        } else {
            $data->latest();
        }
        $data = $data->limit($length)->offset($start)->get();

        return [
            'recordsFiltered' => $recordsFiltered,
            'recordsTotal' => $recordsTotal,
            'data' => $data,
        ];
    }

    // Get data for datatable
    public function getSelectData($with, $joins, $whereChecks, $whereOps, $whereVals, $searchableCols, $searchText, $orderBy, $orderByDir)
    {
        $data = $this->model->with($with);
        foreach ($joins as $key => $join) {
            $classObj = new $join;
            $tableName = $classObj->getTable();
            $modelName = strtolower(class_basename(get_class($classObj)));

            $data->join("{$tableName} as {$modelName}", "{$modelName}.id", '=', "{$modelName}_id");
        }

        if($whereChecks){
            foreach($whereChecks as $key => $check){
                $data->where($check, $whereOps[$key] ?? '=', $whereVals[$key]);
            }
        }

        if($searchText){
            $data->where(function($query) use ($searchableCols, $searchText) {
                foreach($searchableCols as $col) {
                    if(is_array($col)) {
                        $col = implode(', ', $col);
                        $query->orWhere(DB::raw('CONCAT_WS(" ", '.$col.')'), 'like' , "%$searchText%");
                    } else {
                        $query->orWhere($col, 'like' , "%$searchText%");
                    }
                }
            });
        }

        $data = $data->orderBy($orderBy, $orderByDir)->limit(20)->get();

        return $data;
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }

    // For sorting the records
    public function sort($id, $newPosition)
    {
        $data = ['display_order' => $newPosition + 1];
        $this->update($data, $id);
    }
}
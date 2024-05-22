<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Models\Info;
use App\Http\Requests\Admin\InfoFormRequest;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getList(Request $request, Info $model, CommonRepository $repo)
    {
        $orderableCols = ['display_order', 'display_order', 'title','is_active'];
        $searchableCols = ['title'];
        $whereChecks = [];
        $whereOps = [];
        $whereVals = [];
        $with = [];
        $withCount = [];
        $joins = [];

        $repo->setModel($model);

        $data = $repo->getData($request, $with, $withCount, $joins, $whereChecks, $whereOps, $whereVals, $searchableCols, $orderableCols);

        $serial = ($request->start ?? 0) + 1;
        collect($data['data'])->map(function ($item) use (&$serial) {
            $item['sr_no'] = $serial++;
            return $item;
        });

        return response($data);
    }

    public function reorder(Request $request, Info $model, CommonRepository $repo)
    {
        $repo->setModel($model);
        $repo->sort($request->oldData, $request->newPosition);

        return response([], 200);
    }

    public function index(Request $request)
    {
        return view('admin.info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info.form')->with([
            'info' => new Info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoFormRequest $request)
    {
        $request->merge([
            'is_active' => isset($request->is_active) ? 1 : 0,
        ]);

        $info = Info::updateOrCreate(
            ['id' => $request->id],
            $request->all()
        );

        if($request->desktop_file){
            $file = uploadFile($request->desktop_file, informations_path(), $info->file);
            $file->type = image();
            $info->file()->save($file);
        }

        return redirect(route('admin.info.index'))->withSuccess('Action performed successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        return view('admin.info.form')->with([
            'info' => $info
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $info->delete();
        return redirect(route('admin.info.index'))->withSuccess('Action performed successfully.');
    }
}

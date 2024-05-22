<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\NewsFormRequest;
use App\Repositories\CommonRepository;

class NewsController extends Controller
{

    public function getList(Request $request, News $model, CommonRepository $repo)
    {
        $orderableCols = ['display_order', 'title', 'is_featured','is_active','date'];
        $searchableCols = ['title', 'date'];
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

    public function reorder(Request $request, News $model, CommonRepository $repo)
    {
        $repo->setModel($model);
        $repo->sort($request->oldData, $request->newPosition);

        return response([], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index')->with(["news" => $news,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.form')->with([
            'news' => new News
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsFormRequest $request)
    {
        $request->merge([
            'is_featured' => isset($request->is_featured) ? 1 : 0,
            'is_active' => isset($request->is_active) ? 1 : 0,
            'is_news' => isset($request->is_news) ? 1 : 0,
            'is_event' => isset($request->is_event) ? 1 : 0,
        ]);

        $news = News::updateOrCreate(
            ['id' => $request->id],
            $request->all()
        );

        if($request->desktop_file){
            $file = uploadFile($request->desktop_file, news_event_path(), $news->file);
            $file->type = image();
            $news->file()->save($file);
        }

        if($request->moblie_file){
            $file = uploadFile($request->moblie_file, news_event_path(), $news->mobileFile);
            $file->type = mobileImage();
            $news->mobileFile()->save($file);
        }

        return redirect(route('admin.news.index'))->withSuccess('Action performed successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.form')->with([
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect(route('admin.news.index'))->withSuccess('Action performed successfully.'); 
    }
}

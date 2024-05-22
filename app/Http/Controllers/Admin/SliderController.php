<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\SliderFormRequest;
use App\Repositories\CommonRepository;

class SliderController extends Controller
{
    public function getList(Request $request, Slider $model, CommonRepository $repo)
    {
        $orderableCols = ['display_order', 'display_order', 'title', 'is_featured','is_active','type'];
        $searchableCols = ['title', 'type'];
        $whereChecks = ['type'];
        $whereOps = ['='];
        $whereVals = [$request->type];
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

    public function reorder(Request $request, Slider $model, CommonRepository $repo)
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
    public function index(Request $request)
    {
        $sliderType = $request->type;
        return view('admin.slider.index')->with([
            "sliderType" => $sliderType
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.form')->with([
            'slider' => new Slider
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderFormRequest $request)
    {
        $request->merge([
            'is_featured' => isset($request->is_featured) ? 1 : 0,
            'is_active' => isset($request->is_active) ? 1 : 0,
        ]);

        $slider = Slider::updateOrCreate(
            ['id' => $request->id],
            $request->all()
        );

        if($request->desktop_file){
            $file = uploadFile($request->desktop_file, sliders_path($slider->type), $slider->file);
            $file->type = image();
            $slider->file()->save($file);
        }

        if($request->moblie_file){
            $file = uploadFile($request->moblie_file, sliders_path($slider->type), $slider->mobileFile);
            $file->type = mobileImage();
            $slider->mobileFile()->save($file);
        }

        return redirect(route('admin.sliders.index',['type'=> $request->type  ]))->withSuccess('Action performed successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.form')->with([
            'slider' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderFormRequest $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect(route('admin.sliders.index'))->withSuccess('Action performed successfully.');
    }
}

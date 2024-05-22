<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Repositories\CommonRepository;

class CategoryController extends Controller
{
    public function getList(Request $request, Category $model, CommonRepository $repo)
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

    public function reorder(Request $request, Category $model, CommonRepository $repo)
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
        $categories = Category::all();

        return view('admin.category.index')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.form')->with([
            'categories' => new Category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $request->merge([
            'is_featured' => isset($request->is_featured) ? 1 : 0,
            'is_active' => isset($request->is_active) ? 1 : 0,
        ]);

        if(isset($request->refresh_slug) || !$request->id){
            $request->merge([
                'slug' => str_slug($request->name)
            ]); 
        }

        $categories = Category::updateOrCreate(
            ['id' => $request->id],
            $request->all()
        );

        return redirect(route('admin.categories.index'))->withSuccess('Action performed successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.form')->with([
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->products_count === 0) {
            $category->delete();
            return redirect(route('admin.categories.index'))->withSuccess('Action performed successfully.'); 
        } else {
            return redirect(route('admin.categories.index'))->withError('This category has products. It cannot be deleted.'); 
        }
    }
}

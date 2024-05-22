<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductFormRequest;
use App\Repositories\CommonRepository;

class ProductController extends Controller
{

    public function getList(Request $request, Product $model, CommonRepository $repo)
    {
        $orderableCols = ['display_order', 'display_order', 'title', 'is_featured','is_active'];
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

    public function reorder(Request $request, Product $model, CommonRepository $repo)
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
        $products = Product::all();
        return view('admin.product.index')->with(["products" => $products,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('admin.product.form')->with([
            'product' => new Product,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $request->merge([
            'is_featured' => isset($request->is_featured) ? 1 : 0,
            'is_active' => isset($request->is_active) ? 1 : 0,
        ]);

        if(isset($request->refresh_slug) || !$request->id){
            $request->merge([
                'slug' => str_slug($request->title)
            ]); 
        }

        $category_id = $request->category_id;
        unset($request['category_id']);

        $product = Product::updateOrCreate(
            ['id' => $request->id],
            $request->all()
        );
        $product->categories()->sync($category_id);

        if($request->file){
            $file = uploadFile($request->file, products_path(), $product->file);
            $file->type = image();
            $product->file()->save($file);
        }

        return redirect(route('admin.products.index'))->withSuccess('Action performed successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name','id');
        return view('admin.product.form')->with([
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('admin.products.index'))->withSuccess('Action performed successfully.');
    }
}

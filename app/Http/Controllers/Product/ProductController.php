<?php

namespace App\Http\Controllers\Product;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Model\Category;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $image_path = public_path('/images/products/');
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = $request->name . '.' . $image_extension;

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->cat;
        $product->quantity = $request->quantity;

        Image::make($request->image)->resize(500, 500, function ($constraint) {
            $constraint->upsize();
        })->save($image_path . $image_name);

        $product->image = $image_name;
        $product->save();

        return redirect()->route('products.index');
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
    public function edit(Product $product)
    {
        $categories = Category::where('id', '!=', $product->category_id)->get();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $image_path = public_path('/images/products/');
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = $request->name . '.' . $image_extension;
        $product->name = $request->name;
        $product->desc = $request->description;
        if ($request->hasFile('image')) {
            File::delete($image_path . $product->image);
            Image::make($request->image)->resize(500, 500, function ($constraint) {
                $constraint->upsize();
            })->save($image_path . $image_name);

            $product->image = $image_name;
        }
        $product->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        File::delete(public_path('images/products/' . $product->image));
        $product->delete();
        return back();
    }
}

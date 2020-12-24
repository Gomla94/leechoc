<?php

namespace App\Http\Controllers\Category;

use Illuminate\Support\Facades\File;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\Category\CreateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $image_path = public_path('/images/categories/');
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = $request->name . '.' . $image_extension;
        $category = new Category;
        $category->name = $request->name;
        $category->desc = $request->description;
        Image::make($request->image)->resize(1000, 1000, function ($constraint) {
            $constraint->upsize();
        })->save($image_path . $image_name);

        $category->image = $image_name;
        $category->save();

        return redirect()->route('categories.index');
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
        return view('categories.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request, Category $category)
    {
        $image_path = public_path('/images/categories/');
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = $request->name . '.' . $image_extension;
        $category->name = $request->name;
        $category->desc = $request->description;
        if ($request->hasFile('image')) {
            File::delete($image_path . $category->image);
            Image::make($request->image)->resize(500, 500, function ($constraint) {
                $constraint->upsize();
            })->save($image_path . $image_name);

            $category->image = $image_name;
        }
        $category->update();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $image_path = public_path('/images/categories/');
        File::delete($image_path . $category->image);
        $category->delete();
        return redirect()->route('categories.index');
    }
}

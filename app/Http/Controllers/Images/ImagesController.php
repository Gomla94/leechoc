<?php

namespace App\Http\Controllers\Images;

use Validator;
use App\Model\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;


class ImagesController extends Controller
{
    public function index()
    {
        $images = Images::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function edit(Images $image)
    {
        return view('images.edit', compact('image'));
    }

    public function store(Request $request)
    {
        $image_path = public_path('/images/');
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = uniqid() . '.' . $image_extension;
        $image = new Images();
        $image->name = $request->image_name;
        $image->main_text = $request->main_text;
        $image->brief_text = $request->brief_text;
        $image->image_url = str_slug($image_name);
        Image::make($request->image)->resize(1000, 1000, function ($constraint) {
            $constraint->upsize();
        })->save($image_path . $image_name);

        $image->save();

        return redirect()->route('images.index');
    }

    public function update(Images $image, Request $request)
    {
        $image_path = public_path('/images/');
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = uniqid() . '.' . $image_extension;
        $image->name = $request->image_name;
        $image->main_text = $request->main_text;
        $image->brief_text = $request->brief_text;
        if ($request->hasFile('image')) {
            Image::make($request->image)->resize(1000, 1000, function ($constraint) {
                $constraint->upsize();
            })->save($image_path . $image_name);
            $image->image_url = $image_name;
        }

        $image->save();

        return redirect()->route('images.index');
    }

    public function destroy(Images $image)
    {
        $image_path = public_path('/images/' . $image->name);
        File::delete($image_path . $image->name);
        $image->delete();
        return redirect()->route('images.index');
    }
}

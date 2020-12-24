<?php

namespace App\Http\Controllers\HomePage;

use App\Model\HomeText;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomePage\EditHomePageRequest;

class HomePageController extends Controller
{
    public function edit()
    {
        $homepage = HomeText::first();
        // dd($homepage);
        return view('home.edit', compact('homepage'));
    }


    public function update(EditHomePageRequest $request)
    {
        // dd($request->all());
        $homepage = HomeText::first();
        $homepage->update($request->all());
        return back();
    }
}

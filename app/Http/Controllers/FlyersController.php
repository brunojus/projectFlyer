<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FlyerRequest;

use App\Http\Controllers\Controller;

use App\Flyer;

class FlyersController extends Controller
{
    public function create()
    {

    	return view('flyers.create');
    }

    public function store(FlyerRequest $request)
    {

    	Flyer::create($request->all());


        flash('Flyer succesfully created');

    	return redirect()->back();
    	
    }
}

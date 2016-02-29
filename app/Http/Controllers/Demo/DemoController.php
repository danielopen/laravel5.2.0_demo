<?php

namespace App\Http\Controllers\Demo;

//use Illuminate\Http\Request;

use App\Http\Requests\Demo;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function form()
    {
        return view('demo.form');
    }

    public function disposeForm(Demo\FormRequest $request){

    }



}

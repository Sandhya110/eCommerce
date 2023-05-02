<?php

namespace App\Http\Controllers;

use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        $data = Slider::all();
        return view('slider', ['sliders' => $data]);


    }
}
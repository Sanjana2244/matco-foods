<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type',CareerPageBanner());
        return view('career')->with([
            'banner' => $contactSlider,
        ]);
    }
}

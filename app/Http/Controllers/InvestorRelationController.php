<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class InvestorRelationController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', InvestorRelationsPageBanner());
        return view('investorRelation')->with([
            'banner' => $contactSlider,
        ]);
    }
}

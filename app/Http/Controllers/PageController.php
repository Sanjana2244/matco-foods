<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\News;
use App\Models\Product;
use App\Models\Info;
use Jenssegers\Agent\Agent;

class PageController extends Controller
{
    public function home()
    {
        $agent = new Agent();
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $mainSliders = $sliders->where('type', MainSlider());
        $productSlider = $sliders->where('type', 'Product-Banner');
        $newSlider = News::where('is_active', 1)->orderBy('display_order')->get();
        $info = Info::where('is_active', 1)->orderBy('display_order')->get();

        return view('home')->with([
            'sliders' => $mainSliders,
            'productSlider' => $productSlider,
            'newSlider' => $newSlider,
            'info' => $info,
            'agent' => $agent
        ]);
    }

    public function falak()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', FalakBanner());
        return view('falak')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function basmatiRice()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', BasmatiRiceBanner());
        return view('basmati')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function nonBasmatiRice()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', NonBasmatiRiceBanner());
        return view('nonbasmati')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function organicRice()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', OrganicRiceBanner());
        return view('organic')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function riceSyrup()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', RiceSyrupBanner());
        return view('rice-syrup')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function riceProtien()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', RiceProtienBanner());
        return view('rice-protein')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function solids()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', SolidBanner());
        return view('solid')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function dextroseMonohydrate()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', DextroseMonohydrateBanner());
        return view('dextrose-monohydrate')->with([
            'banner' => $contactSlider,
        ]);
    }


    public function otherLeadingBrands()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', OtherLeadingBrandBanner());
        return view('other-brand')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function privateLabelling()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', PrivateLabellingBanner());
        return view('private-label')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function sustainability()
    {
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', SustainabilityPageBanner());
        return view('sustainability')->with([
            'banner' => $contactSlider,
        ]);
    }

    public function maize(){
        $sliders = Slider::where('is_active', 1)->orderBy('display_order')->get();
        $contactSlider = $sliders->where('type', MaizePageBanner());
        return view('maize')->with([
            'banner' => $contactSlider,
        ]);
    }
}

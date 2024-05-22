<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductBanner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $bannerButtonName;
    public $bannerButtonLink;
    public $bannerTitle;
    public $bannerTagline;
    public $bannerDescription;
    public $bannerURL;

    public function __construct($buttonLink, $buttonName, $bannerTitle, $bannerTagline, $bannerDescription, $bannerURL)
    {
        $this->bannerButtonName = $buttonName;
        $this->bannerButtonLink = $buttonLink;
        $this->bannerTitle = $bannerTitle;
        $this->bannerTagline = $bannerTagline;
        $this->bannerDescription = $bannerDescription;
        $this->bannerURL = $bannerURL;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-banner');
    }
}

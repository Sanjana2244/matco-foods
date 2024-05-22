<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ReadMoreButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $buttonName="";
    public $buttonLink="";
    public $target = "";
    public function __construct($button_name, $button_link, $target)
    {
        $this->buttonName = $button_name;
        $this->buttonLink = $button_link;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.read-more');
    }
}

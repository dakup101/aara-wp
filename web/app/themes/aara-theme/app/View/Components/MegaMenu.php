<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MegaMenu extends Component
{
    public $posts;


    public function __construct()
    {
        $posts = get_field("global_megamenu", "options");

        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mega-menu');
    }
}
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconCard extends Component
{
    public $icons;

    public function __construct($icons)
    {
        $this->icons = !empty($icons) ? $icons : [
            [
                "title" => "I am icon", 
                "icon" => asset("/images/no-img.jpg"),
            ],
            [
                "title" => "I am icon", 
                "icon" => asset("/images/no-img.jpg"),
            ],
            [
                "title" => "I am icon", 
                "icon" => asset("/images/no-img.jpg"),
            ],
            [
                "title" => "I am icon", 
                "icon" => asset("/images/no-img.jpg"),
            ],
        ];
    }

    public function render()
    {
        return view('components.icon-card');
    }
}
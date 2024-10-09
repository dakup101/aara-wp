<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferProperties extends Component
{

    public $title;
    public $items;

    public function __construct($title = null, $items = [])
    {
        $this->title = !empty($title) ? $title : "Properties' title"; 
        $this->items = !empty($items) ? $items : [
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ]
        ];
    }

    public function render()
    {
        return view('components.offer-properties');
    }
}
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferCatLink extends Component
{

    public $title;
    public $url;
    public $thumb;

    public function __construct($title = null, $url = null, $thumb = null)
    {
        $this->title = !empty($title) ? $title : "Entity title";
        
        $this->url = !empty($url) ? $url : "#"; 

        $this->thumb = !empty($thumb) ? $thumb : asset("/images/no-img.jpg");
        
    }

    public function render()
    {
        return view('components.offer-cat-link');
    }
}
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioItem extends Component
{

    public $title;
    public $brand;
    public $specs;
    public $thumb;

    public function __construct()
    {
        $this->title = get_the_title();
        
        $thumb = get_the_post_thumbnail_url();
        $this->thumb = !empty($thumb) ? $thumb : asset("/images/no-img.jpg");
        
        $brand = get_field("brand");
        $this->brand = !empty($brand) ? $brand : "Sample brand";

        $specs = get_field("specs");
        $this->specs = !empty($specs) ? $specs : [
            [
                "label" => "Some label", 
                "value" => "Some value"
            ],
            [
                "label" => "Some label", 
                "value" => "Some value"
            ]
        ];
    }

    public function render()
    {
        return view('components.portfolio-item');
    }
}
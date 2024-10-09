<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioImagesItem extends Component
{
    public $title;
    public $thumb;

    public function __construct()
    {
        $this->title = get_the_title();
        
        $thumb = get_the_post_thumbnail_url();
        $this->thumb = !empty($thumb) ? $thumb : asset("/images/no-img.jpg");
    }
    public function render()
    {
        return view('components.portfolio-images-item');
    }
}
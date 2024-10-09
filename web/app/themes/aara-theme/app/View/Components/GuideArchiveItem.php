<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuideArchiveItem extends Component
{
    public $title;
    public $excerpt;
    public $icon;
    public $url;

    public function __construct()
    {
        $this->title = get_the_title();
        $this->excerpt = get_the_excerpt();
        $this->url = get_the_permalink();
        
        $icon = get_field("icon");
        $this->icon = !empty($icon) ? $icon : asset("/images/no-img.jpg");
    }

    public function render()
    {
        return view('components.guide-archive-item');
    }
}
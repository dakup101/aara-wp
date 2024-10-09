<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferCTA extends Component
{
    public $args;
    public $title;
    public $desc;
    public $btn;
    public $img;

    public function __construct($args)
    {
        $args = wp_parse_args( $args, [
            "title" => "Offer CTA", 
            "desc" => "Offer description", 
            "img" => asset("/images/no-img.jpg"),
            "btn" => [
                "text" => "CTA button", 
                "url" => '', 
                "color" => '', 
                "class" => '',
            ]
        ]);


        $this->args = $args;
        
        $this->title = $args["title"];
        $this->desc = $args["desc"];
        $this->btn = $args["btn"];
        $this->img = $args["img"];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offer-cta');
    }
}
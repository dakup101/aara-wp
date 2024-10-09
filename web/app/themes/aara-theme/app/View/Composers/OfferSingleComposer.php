<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class OfferSingleComposer extends Composer
{
    protected static $views = [
        'single-offer',
    ];

    public function with()
    {
        return [
            "title" => get_the_title(), 
            "images" => $this->get_img(), 
            "desc" => $this->get_description(),
            "form" => $this->get_form(),
        ];
    }

    private function get_img() {
       $images = get_field("images");

       return !empty($images) ? $images : [
            [
                "img" => asset("/images/no-img.jpg")
            ]
        ];
    }

    private function get_form() {
        $form = get_field("form");
        
        return !empty($form) ? $form : false;
    }

    private function get_description() {
        $data = get_field("desc");
        $desc = !empty($data) ? $data : "I am product description"; 

        return $desc;
    }
}
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
            "thumbnail" => $this->get_img(), 
            "desc" => $this->get_description(),
            "properties" => $this->get_properties(),
            "desc_long" => $this->get_long_description(),
            "info" => $this->get_info(),
        ];
    }

    private function get_img() {
        $thumb = get_the_post_thumbnail_url();
        return !empty($thumb) ? $thumb : asset("/images/no-img.jpg");
    }

    private function get_description() {
        $data = get_field("desc");
        $desc = !empty($data) ? $data : "I am product description"; 

        return $desc;
    }

    private function get_properties() {
        $data = get_field("properties");

        $fake_data = [
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ],
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ],
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ],
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ],
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ],
            [
                "title" => "I am property", 
                "desc" => "I am property's desc", 
                "icon" => asset("/images/no-img.jpg")
            ],
        ];

        $properties = !empty($data) ? $data : $fake_data;

        return $properties;
    }

    private function get_long_description() {
        $data = get_field("desc_long"); 
        $title = !empty($data["title"]) ? $data["title"] : "I am long description title";
        $desc = !empty($data["desc"]) ? $data["desc"] : "I am product longer description";
        $btn = !empty($data["btn"]) ? $data["btn"] : [];
        $img = !empty($data["img"]) ? $data["img"] : asset("/images/no-img.jpg");
        $pins = !empty($data["pins"]) ? $data["pins"] : [
            [
                "title" => "I am pin", 
                "desc" => "I am pin description", 
                "img" => asset("/images/no-img.jpg")->uri(),
                "pos_x" => 25, 
                "pos_y" => 25,
                "show" => false,
            ],
        ];

        return [
            "title" => $title,
            "desc" => $desc, 
            "btn" => $btn, 
            "img" => $img,
            "pins" => $pins 
        ];
    }

    private function get_info() {
        $data = get_field("info");

        return [
            "info_pdf" => !empty($data["info_pdf"]) ? $data["info_pdf"] : "#", 
            "info_pdf_preview" => !empty($data["info_pdf_preview"]) ? $data["info_pdf_preview"] : asset("/images/no-img.jpg"),
            "steps" => !empty($data["steps"]) ? $data["steps"] : asset("/images/no-img.jpg"),
        ];
    }
}
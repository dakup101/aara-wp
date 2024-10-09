<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HeroComposer extends Composer
{
    protected static $views = [
        'partials.hero'
    ];

    public function with()
    {

        $data = get_field("hero", get_the_ID());

        return [
            'data' => $data,
            'sectionTitle' => !empty($data["title"]) ? $data["title"] : "Hero's title",    
            'desc' => !empty($data["desc"]) ? $data["desc"] : "Hero's description", 
            'btn' => [
                "text" => !empty($data["btn"]["text"]) ? $data["btn"]["text"] : "Hero's button",
                "url" => !empty($data["btn"]["url"]) ? $data["btn"]["url"] : null,
                "color" => !empty($data["btn"]["color"]) ? $data["btn"]["color"] : null,
                "class" => !empty($data["btn"]["class"]) ? $data["btn"]["class"] : null,
            ],
            'slider' => !empty($data["slider"]) ? $data["slider"] : [
                ["img" => asset("/images/no-img.jpg")]
            ]
        ];
    }
}
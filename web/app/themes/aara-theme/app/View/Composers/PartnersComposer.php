<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PartnersComposer extends Composer
{
    protected static $views = [
        'partials.partners'
    ];


    public function with()
    {
        $data = get_field("global_partners", "options");

        $title = !empty($data["title"]) ? $data["title"] : "Partners title";
        $text = !empty($data["text"]) ? $data["text"] : "Partners text";

        $logos = !empty($data["logos"]) ? $data["logos"] : [
            [
                "logo" => asset("/images/no-img.jpg")
            ],
        ];

        return [
            "partners_title" => $title, 
            "partners_text" => $text, 
            "partners_logos" => $logos
        ];
    }
}
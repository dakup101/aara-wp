<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class IconsInfoComposer extends Composer
{
    protected static $views = [
        "partials.icons-info"
    ];

    public function with()
    {

        $data = get_field("global_icons_info", "options");

        $title = !empty($data["title"]) ? $data["title"] : "Icons Info";

        $icons = !empty($data["icons"]) ? $data["icons"] : [
            [
                "icon" => asset("/images/no-img.jpg"),
                "title" => "Icon title", 
                "text" => "Icon text",
            ],
            [
                "icon" => asset("/images/no-img.jpg"),
                "title" => "Icon title", 
                "text" => "Icon text",
            ],
            [
                "icon" => asset("/images/no-img.jpg"),
                "title" => "Icon title", 
                "text" => "Icon text",
            ],
        ];

        return [
            "sectionTitle" => $title, 
            "icons_info" => $icons,
        ];
    }
}
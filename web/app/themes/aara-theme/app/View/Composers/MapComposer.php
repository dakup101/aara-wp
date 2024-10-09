<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MapComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        "partials.map"
    ];

    public function with()
    {

        $data = get_field("global_contact_map", "options");

        $title = !empty($data["title"]) ? $data["title"] : "Map title";
        $addr = !empty($data["addr"]) ? $data["addr"] : "<p>I am<br>address</p><p>I have text formatting</p>";
        $maps_url = !empty($data["maps_url"]) ? $data["maps_url"] : "#";

        return [
            "sectionTitle" => $title, 
            "addr" => $addr, 
            "maps_url" => $maps_url
        ];
    }
}
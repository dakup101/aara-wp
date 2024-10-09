<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateAboutComposer extends Composer
{
    protected static $views = [
        "template-about"
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $part_1 = get_field("part_1");
        $part_2 = get_field("part_2");
        $title_1 = get_the_title();
        $title_2 = get_field( "title_2" );
        $banner_1 = get_field("banner_1");
        $banner_2 = get_field("banner_2");
        $img = get_field("img");

        return [
            "title_1" => $title_1, 
            "title_2" => !empty($title_2) ? $title_2 : "Title 2", 
            "part_1" => !empty($part_1) ? $part_1 : "About, part 1",
            "part_2" => !empty($part_2) ? $part_2 : "About, part 2",
            "banner_1" => !empty($banner_1) ? $banner_1 : asset("/images/no-img.jpg"),
            "banner_2" => !empty($banner_2) ? $banner_2 : asset("/images/no-img.jpg"),
            "img" => !empty($img) ? $img : asset("/images/no-img.jpg"),
        ];
    }
}

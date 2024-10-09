<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class WhyUsComposer extends Composer
{    
    protected static $views = [
        'partials.why-us', 
        'template-about'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $data = get_field("why_us");
        if (empty($data)) $data = get_field("why_us", "options");

        $title = !empty($data["title"]) ? $data["title"] : "Why us title";
        $text = !empty($data["text"]) ? $data["text"] : "Why us text";
        $btn = !empty($data["btn"]) ? $data["btn"] : [];
        $icons = !empty($data["icons"]) ? $data["icons"] : [];
 
        return [
            "sectionTitle" => $title, 
            "text" => $text, 
            "btn" => $btn, 
            "icons" => $icons,
        ];
    }
}
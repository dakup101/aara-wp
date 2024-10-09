<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class GuideSingleComposer extends Composer
{
    protected static $views = [
        "single-guide"
    ];

    public function with()
    {
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $content = get_the_content();
        $query = $this->get_query();
        $pdfs = $this->get_pdfs();

        return [
            "title" => $title,
            "excerpt" => $excerpt,
            "content" => $content,
            "query" => $query, 
            "pdfs" => $pdfs
        ];
    }

    public function get_query() {
        $args = array(
            'post_type'      => 'guide',
            'posts_per_page' => 3,
        );
        
        $guides_query = new WP_Query($args);
        return $guides_query;
    }

    public function get_pdfs() {
        $data = get_field("pdfs");
        return !empty($data) ? $data : [
            [
                "name" => "Sample.pdf", 
                "url" => "#",
            ],
            [
                "name" => "Sample.pdf", 
                "url" => "#",
            ],
            [
                "name" => "Sample.pdf", 
                "url" => "#",
            ],
        ];
    }
}
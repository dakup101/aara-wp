<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class GuideArchiveComposer extends Composer
{
    protected static $views = [
        "archive-guide"
    ];


    public function with()
    {
        $data = get_field("guide_archive");
        $title = __("Strefa Klienta - Poradniki", "aara-theme");
        $pdfs_title = __("Pobierz instrukcje .pdf", "aara-theme");
        $desc = get_field("global_guide_desc", "options");
        $pdfs = $this->get_pdfs();
        $query = $this->get_query();

        return [
            "title" => $title, 
            "desc" => $desc,
            "pdfs_title" => $pdfs_title, 
            "pdfs" => $pdfs,
            "query" => $query
        ];
    }

    public function get_query() {
        $args = array(
            'post_type'      => 'guide',
            'posts_per_page' => -1, // Retrieve all posts
        );
        
        $guides_query = new WP_Query($args);
        return $guides_query;
    }

    public function get_pdfs() {
        $data = get_field("global_offer_pdfs", "options");
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
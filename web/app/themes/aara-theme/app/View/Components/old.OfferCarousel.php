<?php

namespace App\View\Components;

use Illuminate\View\Component;
use WP_Term;

class OfferCarousel extends Component
{
    public $title;
    public $terms;
    public $btn;

    public function __construct($data = [])
    {
        $this->title = !empty($data["title"]) ? $data["title"] : "Offer Carousel's title";
        $this->btn = !empty($data["btn"]) ? $data["btn"] : [];
        $this->terms = !empty($data["terms"]) ? $data["terms"] : $this->make_fake_terms();
    }

    public function make_fake_terms() {

        $fake_terms = [];

        for ($i = 0; $i < 8; $i++) {


            $fake_term = new WP_Term(
                (object) [
                    'term_id' => 0,
                    'name' => "Fake Category is representing a longer version of title for tests purpose", // Convert slug to capitalized words
                    'slug' => "fake_category_term",
                    'term_group' => 0,
                    'term_taxonomy_id' => 0,
                    'taxonomy' => "offer_cat",
                    'description' => '',
                    'parent' => 0,
                    'count' => 0,
                ]
            );
        

            $fake_terms[] = ["term" => $fake_term];
        }

        return $fake_terms;
    }

    public function render()
    {
        return view('components.offer-carousel');
    }
}
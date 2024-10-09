<?php

namespace App\View\Components;

use Illuminate\View\Component;
use WP_Query;

class Portfolio extends Component
{
    public $title;
    public $product;
    public $selected;
    public $query;

    public function __construct($title = null, $product = null, $selected = [])
    {
        $this->title = !empty($title) ? $title : "Portfolio";
        $this->product = !empty($product) ? $product : null;
        $this->selected = !empty($selected) ? $selected : [];
        $this->query = $this->get_query();
    }

    public function get_query() {
        $args = [
            "post_type" => "portfolio",
            "posts_per_page" => 10,
        ];

        if (!empty($this->selected)) {
            $args["post__in"] = $this->selected; 
        }

        if (!empty($this->product)) {
            $args["meta_query"][] = [
                'key'     => 'product_id', // The name of your ACF field
                'value'   => $this->product,
                'compare' => '=',    
            ];
        }

        return new WP_Query( $args );
    }

    public function render()
    {
        return view('components.portfolio');
    }
}
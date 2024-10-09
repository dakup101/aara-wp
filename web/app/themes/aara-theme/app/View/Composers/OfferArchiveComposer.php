<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class OfferArchiveComposer extends Composer
{
    protected static $views = [
        "archive-offer", 
        "taxonomy-offer_cat",
    ];

    public function with()
    {
        return [
            "title" => $this->get_title(), 
            "items" => $this->get_items(),
            "desc" => $this->get_description()
        ];
    }

    private function get_title() {

        $title = "Undefined title";

        if (is_archive( "offer" )) {
            $title = __("Zapoznaj się z naszą ofertą", "aara-theme");
        }

        if (is_tax( "offer_cat" )) {
            $term = get_queried_object();
            $title = $term->name;
        }

        return $title;
    }

    private function get_description() {
        $desc = "Undefined description";

        if (is_archive( "offer" )) {
            $data = get_field("global_offer_desc", "options");
            $desc = !empty($data) ? $data : "Offer's description";
        }

        if (is_tax( "offer_cat" )) {
            $term = get_queried_object();
            $data = term_description( $term );
            $desc = !empty($data) ? $data : "Offer's category description";
        }

        return $desc;
    }

    private function get_items() {
        $items = array();
    
        if (is_post_type_archive("offer")) {
            // Get first-level hierarchy terms of "offer_cat"
            $terms = get_terms(array(
                'taxonomy' => 'offer_cat',
                'parent'   => 0,
            ));
    
            if (!empty($terms) && !is_wp_error($terms)) {
                // Populate items array
                foreach ($terms as $term) {
                    $items[] = array(
                        'title' => $term->name,
                        'url'   => get_term_link($term, 'offer_cat'),
                        'thumb' => !empty(get_field("thumb", $term)) ? get_field("thumb", $term) : null, // You need to implement a function to get term thumbnail
                    );
                }
            }
        }
    
        if (is_tax("offer_cat")) {
            $term = get_queried_object();
            
            // Check if the term has children
            $children = get_terms(array(
                'taxonomy' => 'offer_cat',
                'parent'   => $term->term_id,
            ));
    
            if (!empty($children) && !is_wp_error($children)) {
                // Populate items array
                foreach ($children as $child) {

                    $items[] = array(
                        'title' => $child->name,
                        'url'   => get_term_link($child, 'offer_cat'),
                        'thumb' => !empty(get_field("thumb", $child)) ? get_field("thumb", $child) : null, // You need to implement a function to get term thumbnail
                    );
                }
            } else {
                // Return posts belonging to this term
                $posts = get_posts(array(
                    'post_type' => 'offer', // Adjust the post type if needed
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'offer_cat',
                            'field'    => 'term_id',
                            'terms'    => $term->term_id,
                        ),
                    ),
                ));
    
                // Populate items array
                foreach ($posts as $post) {
                    $items[] = array(
                        'title' => $post->post_title,
                        'url'   => get_permalink($post),
                        'thumb' => get_the_post_thumbnail_url($post->ID), // You need to implement a function to get post thumbnail
                    );
                }
            }
        }
    
        return $items;
    }
}
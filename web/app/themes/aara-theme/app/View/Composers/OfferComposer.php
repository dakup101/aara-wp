<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class OfferComposer extends Composer
{
    protected static $views = [
        'partials.offer'
    ];

    public function with()
    {
        $data = get_field("offer", get_the_ID());

        $carousel = !empty($data["offer_carousel"]) ? $data["offer_carousel"] : [];
        $offer = !empty($data["offer_cta"]) ? $data["offer_cta"] : [];

        return [
            "data" => $data,
            "offer_cta" => [
                "title" => !empty($offer["title"]) ? $offer["title"] : "Offer CTA", 
                "desc" => !empty($offer["desc"]) ? $offer["desc"] : "Offer description",
                "img" => !empty($offer["img"]) ? $offer["img"] : asset("/images/no-img.jpg"),
                'btn' => [
                    "text" => !empty($offer["btn"]["text"]) ? $offer["btn"]["text"] : "CTA button",
                    "url" => !empty($offer["btn"]["url"]) ? $offer["btn"]["url"] : '',
                    "color" => !empty($offer["btn"]["color"]) ? $offer["btn"]["color"] : '',
                    "class" => !empty($offer["btn"]["class"]) ? $offer["btn"]["class"] : '',
                ],
            ],
            "offer_carousel" => [
                "title" => !empty($carousel["title"]) ? $carousel["title"] : "Offer Carousel", 
                "terms" => !empty($carousel["offers"]) ? $carousel["offers"] : [],
                'btn' => [
                    "text" => !empty($carousel["btn"]["text"]) ? $carousel["btn"]["text"] : "Carousel button",
                    "url" => !empty($carousel["btn"]["url"]) ? $carousel["btn"]["url"] : '',
                    "color" => !empty($carousel["btn"]["color"]) ? $carousel["btn"]["color"] : '',
                    "class" => !empty($carousel["btn"]["class"]) ? $carousel["btn"]["class"] : '',
                ],
            ]
        ];
    }
}
<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Button;

class Offer extends Field
{
    public function fields()
    {
        $this->set_args();

        $offer = new FieldsBuilder('offer');

        $offer
            ->setLocation('post_type', '==', 'page')
            ->and('page_type', '==', 'front_page');


        $button = new FieldsBuilder('hero_btn');
        new ButtonField($button, "btn", "Przycisk");

        $offer_cta = new FieldsBuilder('offer_cta');
        $offer_cta
            ->addGroup('offer_cta', $this->offer_cta_args)
                ->addText('title', $this->offer_title_args)
                ->addWysiwyg('desc', $this->offer_desc_args)
                ->addImage('img', $this->offer_img_args)
                ->addFields($button)
            ->endGroup();
        
        $offer_carousel = new FieldsBuilder('offer_carousel');
        $offer_carousel
            ->addGroup('offer_carousel', $this->offer_carousel_args)
                ->addText('title', $this->offer_title_args)
                ->addRepeater('offers', $this->carousel_args)
                    // ->addTaxonomy('term', $this->carousel_item_args)
                    ->addPostObject('id', [
                        'label' => 'Oferta',
                        'post_type' => 'offer',
                        'return_format' => 'id',
                        'ui' => 1,
                    ])
                ->endRepeater()
                ->addFields($button)
            ->endGroup();

        $offer
            ->addGroup('offer', $this->offer_args)
                ->addFields($offer_cta)
                ->addFields($offer_carousel)
                
            ->endGroup();

        return $offer->build();
    }

    private function set_args(){
        $this->offer_args = [
            'label' => 'Sekcja "Oferta"',
            'layout' => 'block'
        ];

        $this->offer_cta_args = [
            'label' => 'Oferta | Informacje',
            'layout' => 'block'
        ];

        $this->offer_img_args = [
            'label' => 'Grafika',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
        ];

        $this->offer_carousel_args = [
            'label' => 'Oferta | Karuzela',
            'layout' => 'block'
        ];

        $this->offer_title_args = [
            'label' => __('Nagłówek'),
            'required' => 0,
            'wrapper' => [
                'width' => '50',
            ],
        ];

        $this->offer_desc_args = [
            'label' => __('Opis sekcji'),
            'required' => 0,
            'wrapper' => [
                'width' => '50',
            ],
            'rows' => '3',
            'new_lines' => 'wpautop',
        ];

        $this->carousel_args = [
            'label' => 'Karuzela ofert',
            'required' => 0,
            'wrapper' => [
              'width' => '50',
            ],
            'layout' => 'table',
            'button_label' => 'Dodaj grafikę',
        ];
        
        $this->carousel_item_args = [
            'label' => 'Oferta',
            'post_type' => ['offer'],
            'return_format' => 'object',
            'taxonomy' => 'offer_cat',
            'field_type' => 'select',
        ];
    }
}
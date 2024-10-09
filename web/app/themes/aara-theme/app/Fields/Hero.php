<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Button;

class Hero extends Field
{

    public $hero_args;
    public $title_args;
    public $desc_args;
    public $btn_args;

    public function fields()
    {
        $this->set_args();

        $hero = new FieldsBuilder('hero');

        $hero
            ->setLocation('post_type', '==', 'page')
                ->and('page_type', '==', 'front_page');

        $button = new FieldsBuilder('hero_btn');
        new ButtonField($button, "btn", "Przycisk");

        $hero
            ->addGroup('hero', $this->hero_args)
                ->addText('title', $this->title_args)
                ->addWysiwyg('desc', $this->desc_args)
                ->addRepeater('slider', $this->slider_args)
                    ->addImage('img', $this->slide_args)
                ->endRepeater()
                ->addFields($button)
            ->endGroup();

        return $hero->build();
    }

    public function set_args(){
        $this->hero_args = [
            'label' => 'Sekcja "Hero"',
            'layout' => 'block'
        ];

        $this->title_args = [
            'label' => __('Nagłówek sekcji'),
            'required' => 0,
            'wrapper' => [
                'width' => '30',
            ],
            'default_value' => '',
            'placeholder' => '',
        ];

        $this->desc_args = [
            'label' => __('Opis sekcji'),
            'required' => 0,
            'wrapper' => [
                'width' => '50',
            ],
            'rows' => '3',
            'new_lines' => 'wpautop',
        ];

        $this->slider_args = [
            'label' => 'Baner',
            'required' => 0,
            'wrapper' => [
              'width' => '20',
            ],
            'layout' => 'table',
            'button_label' => 'Dodaj grafikę',
        ];
        
        $this->slide_args = [
            'label' => 'Grafika',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
        ];
    }
}
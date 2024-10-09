<?php
namespace App\Fields;
use StoutLogic\AcfBuilder\FieldsBuilder;


// Create a separate utility class for ACF Builder args to generate Button Group Args to use withing components
class ButtonField extends FieldsBuilder {
    public $builder;
    public $group_name;
    private $group_label;

    private $btn_args;
    private $text_args;
    private $url_args;
    private $type_args;
    private $color_args;
    private $class_args;

    public function __construct($builder, $group_name = "btn", $group_label = "Button"){
        $this->builder = $builder;
        $this->group_name = $group_name;
        $this->group_label = $group_label;

        $this->set_args();
        $this->set_fields($group_name);
    }

    private function set_fields() {
        $this->builder 
            ->addGroup($this->group_name, $this->btn_args)
                ->addText('text', $this->text_args)
                ->addText('url', $this->url_args)
                ->addSelect('color', $this->color_args)
                ->addText('class', $this->class_args)
            ->endGroup();
    }

    private function set_args(){
        $this->btn_args = [
            'label' => $this->group_label,
            'layout' => 'block'
        ];

        $this->text_args = [
            'label' => __('Tekst przycisku'),
            'required' => 0,
            'wrapper' => [
                'width' => '50',
            ],
        ];

        $this->class_args = [
            'label' => __('Dodatkowe klasy css'),
            'required' => 0,
            'wrapper' => [
                'width' => '50',
            ],
        ];


        $this->url_args = [
            'label' => __('Link przycisku'),
            'required' => 0,
            'wrapper' => [
                'width' => '50',
            ],
        ];

        $this->color_args = [
            'label' => 'Kolor Przycisku',
            'wrapper' => [
                'width' => '50',
            ],
            'choices' => [
                'accent-blue' => 'Niebieski (Wypełnienie)', 
                'accent-text' => "Niebieski (Tekst)",
            ],
            'default_value' => 'accent-blue',
            'layout' => 'vertical',
            'return_format' => 'value',
        ];

        
    }
}
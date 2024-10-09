<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $color;
    public $text;
    public $url;
    public $class;


    public function __construct($args = [])
    
    {
        $args = wp_parse_args( $args, [
            "type" => "link", 
            "color" => "accent-blue", 
            "text" => "Button", 
            "url" => "#", 
            "class" => "",
        ] ); 
        
        $this->type = $args["type"];
        $this->color = $args["color"];
        $this->text = $args["text"];
        $this->url = $args["url"];
        $this->class = $this->getClassList($args["class"]);
    }

    private function getClassList($additional){
        $classList = "btn btn--" . $this->color;

        if (!empty($additional)) $classList .= ' ' . $additional;

        return $classList;
    }
    public function render()
    {
        return view('components.button');
    }
}
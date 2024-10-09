<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactPerson extends Component
{
    public $name;
    public $position;
    public $tel;
    public $tel_inline;
    public $mail;
    public $img;

    public function __construct($args)
    {
        $this->name = !empty($args["name"]) ? $args["name"] : "John Doe";
        $this->position = !empty($args["position"]) ? $args["position"] : "Employee";
        $this->tel = !empty($args["tel"]) ? $args["tel"] : null;
        $this->tel_inline = !empty($args["tel_inline"]) ? $args["tel_inline"] : "+48123123123";
        $this->mail = !empty($args["mail"]) ? $args["mail"] : "dev@everywhere.pl";
        $this->img = !empty($args["img"]) ? $args["img"] : asset("/images/no-img.jpg");
    }

    public function render()
    {
        return view('components.contact-person');
    }
}

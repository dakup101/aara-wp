<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ContactComposer extends Composer
{

    public $persons;
    public $addr;
    public $mail;
    public $tel;
    public $tel_inline;
    public $nip;
    public $map;
    public $map_url;
    public $form;

    protected static $views = [
        'template-contact',
    ];


    public function with()
    {

        $persons = get_field("persons");
        $contact = get_field("contact");

        $this->addr = !empty($contact["addr"]) ? $contact["addr"] : "Address line";
        $this->tel = !empty($contact["tel"]) ? $contact["tel"] : "+48 123 123 123";
        $this->tel_inline = !empty($contact["tel_inline"]) ? $contact["tel_inline"] : "+48123123123";
        $this->nip = !empty($contact["nip"]) ? $contact["nip"] : "12312312312";
        $this->map = !empty($contact["map"]) ? $contact["map"] : asset("/images/no-img.jpg");
        $this->map_url = !empty($contact["map_url"]) ? $contact["map_url"] : "#";
        $this->mail = !empty($contact["mail"]) ? $contact["mail"] : "dev@everywhere.pl";
        $this->form = !empty($contact["form"]) ? $contact["form"] : "dev@everywhere.pl";

        $this->persons = !empty($persons) ? $persons : [
            [
                "name" => "John Doe", 
                "position" => "Employee", 
                "tel" => "+48 123 123 123", 
                "tel_inline" => "+48123123123", 
                "mail" => "dev@everywhere.pl", 
                "img" => asset("/images/no-img.jpg")
            ],
            [
                "name" => "John Doe", 
                "position" => "Employee", 
                "tel" => "+48 123 123 123", 
                "tel_inline" => "+48123123123", 
                "mail" => "dev@everywhere.pl", 
                "img" => asset("/images/no-img.jpg")
            ],
        ];

        return [
            "persons" => $this->persons,
            "addr" => $this->addr, 
            "tel" => $this->tel, 
            "tel_inline" => $this->tel_inline, 
            "nip" => $this->nip,
            "map" => $this->map,
            "map_url" => $this->map_url,
            "mail" => $this->mail,
            "form" => $this->form
        ];
    }
}
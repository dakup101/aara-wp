<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Faq extends Component
{

    public $title;
    public $items;

    public function __construct()
    {
        $data = get_field("faq");

        $this->title = !empty($data["title"]) ? $data["title"] : "CTA's title";
        $this->items = !empty($data["items"]) ? $data["items"] : [
            [
                "question" => "Sample question", 
                "answer" => "Sample asnwer",
            ],
            [
                "question" => "Sample question", 
                "answer" => "Sample asnwer",
            ]
        ];
    }

    public function render()
    {
        return view('components.faq');
    }
}
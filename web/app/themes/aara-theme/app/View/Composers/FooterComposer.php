<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FooterComposer extends Composer
{
    public $info;
    public $menu_1;
    public $menu_2;

    protected static $views = [
        "sections.footer"
    ];


    public function with()
    {

        $this->info = get_field("footer_info", "options");
        $this->menu_1 = $this->get_nav_html("footer_products");
        $this->menu_2 = $this->get_nav_html("footer_info");

        return [
            "footer_info" => $this->info, 
            "footer_menu_1" => $this->menu_1, 
            "footer_menu_2" => $this->menu_2,
        ];
    }

    public function get_nav_html($nav){
        ob_start();
        wp_nav_menu(array(
            'theme_location' => $nav, // Replace with your menu location name
            'menu_class'     => 'footer__menu',       // Add a custom class to the menu
            'container' => false
        ));
        return ob_get_clean();
    }
}
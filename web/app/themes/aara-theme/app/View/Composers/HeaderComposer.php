<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HeaderComposer extends Composer
{
    protected static $views = [
        'sections.header'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $menu = $this->get_nav_html();

        return [
            "menu" => $menu
        ];
    }

    public function get_nav_html(){
        ob_start();
        wp_nav_menu(array(
            'theme_location' => 'primary_navigation', // Replace with your menu location name
            'menu_class'     => 'header__menu',       // Add a custom class to the menu
            'container' => false
        ));
        return ob_get_clean();
    }
}

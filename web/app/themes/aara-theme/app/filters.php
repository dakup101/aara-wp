<?php
namespace App;

add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('acf/settings/show_admin', '__return_false');

add_filter('wpcf7_autop_or_not', '__return_false'); 
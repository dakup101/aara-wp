<?php

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/* Load Setup & Filters */

collect([
    'setup', 
    'filters'
])->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file));
        }
    });

/* Load Helpers */

collect([
    'offer-single-permalink',
    'allow-svg'
])->each(function ($file) {
        $file = "app/Helpers/{$file}.php";

        if (! locate_template($file, true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }

        require_once($file);
    });

    
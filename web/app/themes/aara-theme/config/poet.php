<?php

return [
    'post' => [
        'offer' => [
            'enter_title_here' => __("Oferta"),
            'menu_icon' => 'dashicons-money-alt',
            'supports' => ['title', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => "oferta",
            'rewrite' => [
                // 'slug' => 'produkt',
                'slug' => 'oferta'
            ],
            'hierarchical' => true,
            'labels' => [
                'plural' => __("Oferta"),
                'singular' => __("Oferta"),
                'add_new' => __("Dodaj"),
                'add_new_item' => __("Dodaj"),
                'edit_item' => __("Edytuj"),
                'new_item' => __("Nowa oferta"),
                'view_item' => __("Zobacz"),
                'view_items' => __("Zobacz"),
                'search_items' => __("Szukaj"),
                'not_found' => __("Nie znaleziono"),
                'not_found_in_trash' => __("Nie znaleziono w koszu"),
                'all_items' => __("Wszystkie"),
                'archives' => __("Archiwum"),
                'attributes' => __("Atrybuty"),
                'insert_into_item' => __("Wstaw"),
                'uploaded_to_this_item' => __("Przesłane do tej"),
                'filter_items_list' => __("Filtruj listę"),
                'items_list_navigation' => __("Nawigacja po liście"),
                'items_list' => __("Lista"),
                'item_published' => __("Opublikowana"),
                'item_published_privately' => __("Opublikowana prywatnie"),
                'item_reverted_to_draft' => __("Przywrócona do szkicu"),
                'item_scheduled' => __("Zaplanowano"),
                'item_updated' => __("Zaktualizowano"),
            ],
        ],

        'portfolio' => [
            'enter_title_here' => __("Realizacja"),
            'menu_icon' => 'dashicons-feedback',
            'supports' => ['title', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => false,
            'labels' => [
                'plural' => __("Portfolio"),
                'singular' => __("Realizacja"),
                'add_new' => __("Dodaj"),
                'add_new_item' => __("Dodaj"),
                'edit_item' => __("Edytuj"),
                'new_item' => __("Nowa realizacja"),
                'view_item' => __("Zobacz"),
                'view_items' => __("Zobacz"),
                'search_items' => __("Szukaj"),
                'not_found' => __("Nie znaleziono"),
                'not_found_in_trash' => __("Nie znaleziono w koszu"),
                'all_items' => __("Wszystkie"),
                'archives' => __("Archiwum"),
                'attributes' => __("Atrybuty"),
                'insert_into_item' => __("Wstaw"),
                'uploaded_to_this_item' => __("Przesłane do tej"),
                'filter_items_list' => __("Filtruj listę"),
                'items_list_navigation' => __("Nawigacja po liście"),
                'items_list' => __("Lista"),
                'item_published' => __("Opublikowana"),
                'item_published_privately' => __("Opublikowana prywatnie"),
                'item_reverted_to_draft' => __("Przywrócona do szkicu"),
                'item_scheduled' => __("Zaplanowano"),
                'item_updated' => __("Zaktualizowano"),
            ],
        ],

        'guide' => [
            'enter_title_here' => __("Poradnik"),
            'menu_icon' => 'dashicons-info', // You can choose a different dashicon for guides
            'supports' => ['title', 'editor', 'revisions', 'thumbnail', 'excerpt'],
            'show_in_rest' => true,
            'has_archive' => "poradniki",
            'rewrite' => [
                'slug' => 'poradnik',
            ],
            'hierarchical' => true,
            'labels' => [
                'plural' => __("Poradniki"),
                'singular' => __("Poradnik"),
                'add_new' => __("Dodaj"),
                'add_new_item' => __("Dodaj nowy poradnik"),
                'edit_item' => __("Edytuj poradnik"),
                'new_item' => __("Nowy poradnik"),
                'view_item' => __("Zobacz poradnik"),
                'view_items' => __("Zobacz poradniki"),
                'search_items' => __("Szukaj poradników"),
                'not_found' => __("Nie znaleziono poradników"),
                'not_found_in_trash' => __("Nie znaleziono poradników w koszu"),
                'all_items' => __("Wszystkie poradniki"),
                'archives' => __("Archiwum poradników"),
                'attributes' => __("Atrybuty poradnika"),
                'insert_into_item' => __("Wstaw do poradnika"),
                'uploaded_to_this_item' => __("Przesłane do tego poradnika"),
                'filter_items_list' => __("Filtruj listę poradników"),
                'items_list_navigation' => __("Nawigacja po liście poradników"),
                'items_list' => __("Lista poradników"),
                'item_published' => __("Poradnik opublikowany"),
                'item_published_privately' => __("Poradnik opublikowany prywatnie"),
                'item_reverted_to_draft' => __("Poradnik przywrócony do szkicu"),
                'item_scheduled' => __("Poradnik zaplanowany"),
                'item_updated' => __("Poradnik zaktualizowany"),
            ],
        ],
    ],

    // 'taxonomy' => [
    //     'offer_cat' => [
    //         'links' => ['offer'],
    //         'meta_box' => 'simple',
    //         'rewrite' => ['slug' => 'oferta', 'with_front' => false, 'hierarchical' => true],
    //         'show_admin_column' => true,
    //         'labels' => [
    //             'name' => __("Kategorie"),
    //             'singular_name' => __("Kategoria"),
    //             'search_items' => __("Szukaj kategorii"),
    //             'all_items' => __("Wszystkie kategorie"),
    //             'parent_item' => __("Nadrzędna kategoria"),
    //             'parent_item_colon' => __("Nadrzędna kategoria:"),
    //             'edit_item' => __("Edytuj kategorię"),
    //             'update_item' => __("Aktualizuj kategorię"),
    //             'add_new_item' => __("Dodaj nową kategorię"),
    //             'new_item_name' => __("Nowa nazwa kategorii"),
    //             'menu_name' => __("Kategorie"),
    //         ],
    //     ],
    // ],
    
];
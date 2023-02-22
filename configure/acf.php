<?php

if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page(
        array(
            'page_title'  => 'Настройки сайта',
            'menu_title'  => 'Настройки сайта',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'manage_options',
            'parent_slug' => '',
            'position'    => false,
            'icon_url'    => false,
            'redirect'    => false,
        )
    );
    acf_add_options_page(
        array(
            'page_title'  => 'Наши услуги',
            'menu_title'  => 'Наши услуги',
            'menu_slug'   => 'services',
            'capability'  => 'manage_options',
            'parent_slug' => '',
            'position'    => false,
            'icon_url'    => 'dashicons-cart',
            'redirect'    => false,
        )
    );


    /* acf_add_options_sub_page(
         array(
             'page_title'  => 'Header',
             'menu_title'  => 'Header',
             'parent_slug' => 'theme-settings',
         )
     );*/



    /* acf_add_options_sub_page(
         array(
             'page_title'  => 'Footer',
             'menu_title'  => 'Footer',
             'parent_slug' => 'theme-settings',
         )
     );*/


}
// ACF Blocks

add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'theme-blocks',
        'title' => 'Theme Blocks'
    );

    return $categories;
} );

add_action('acf/init', 'podkova_acf_init_block_types');
function podkova_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a banner block.
        acf_register_block_type(array(
            'name'              => 'home-slider',
            'title'             => __('Заглавный слайдер'),
            'description'       => __('Слайдер для шапки сайта'),
            'render_template'   => 'blocks/home-slider.php',
            'category'          => 'theme-blocks',
            'icon'              => 'images-alt2',
            'keywords'          => array( 'banner', 'first','header' ),
        ));

        // register a banner block.
        acf_register_block_type(array(
            'name'              => 'text-photo-right',
            'title'             => __('Текст с фото справа'),
            'description'       => __(''),
            'render_template'   => 'blocks/text-photo-right.php',
            'category'          => 'theme-blocks',
            'icon'              => 'align-right',
            'keywords'          => array( 'text', 'image','content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'text-map-right',
            'title'             => __('Текст с картой справа'),
            'description'       => __(''),
            'render_template'   => 'blocks/text-map-right.php',
            'category'          => 'theme-blocks',
            'icon'              => 'location',
            'keywords'          => array( 'text', 'map','content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'photo-gallery',
            'title'             => __('Галерея фотографий'),
            'description'       => __('Галерея с фильтром'),
            'render_template'   => 'blocks/photo-gallery.php',
            'category'          => 'theme-blocks',
            'icon'              => 'layout',
            'keywords'          => array( 'gallery', 'image','content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'photo-gallery-extended',
            'title'             => __('Галерея фотографий расширенная'),
            'description'       => __('Галерея с фильтром расширенная'),
            'render_template'   => 'blocks/photo-gallery-extended.php',
            'category'          => 'theme-blocks',
            'icon'              => 'layout',
            'keywords'          => array( 'gallery', 'image','content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'fish',
            'title'             => __('Рыба в нашем водоеме'),
            'description'       => __(''),
            'render_template'   => 'blocks/fish.php',
            'category'          => 'theme-blocks',
            'icon'              => 'buddicons-activity',
            'keywords'          => array( 'gallery', 'image','content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'testimonials',
            'title'             => __('Отзывы'),
            'description'       => __('Слайдер отзывов'),
            'render_template'   => 'blocks/testimonials.php',
            'category'          => 'theme-blocks',
            'icon'              => 'format-status',
            'keywords'          => array( 'testimonials', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'prices',
            'title'             => __('Тарифы'),
            'description'       => __('Слайдер тарифов'),
            'render_template'   => 'blocks/prices.php',
            'category'          => 'theme-blocks',
            'icon'              => 'money-alt',
            'keywords'          => array( 'prices', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'news',
            'title'             => __('Новости'),
            'description'       => __('Блок новостей с аккордионом'),
            'render_template'   => 'blocks/news.php',
            'category'          => 'theme-blocks',
            'icon'              => 'editor-table',
            'keywords'          => array( 'news','posts', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'preferences',
            'title'             => __('Преимущества'),
            'description'       => __('Блок преимуществ'),
            'render_template'   => 'blocks/preferences.php',
            'category'          => 'theme-blocks',
            'icon'              => 'editor-table',
            'keywords'          => array( 'preferences', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'map',
            'title'             => __('Карта'),
            'description'       => __('Блок карты'),
            'render_template'   => 'blocks/map.php',
            'category'          => 'theme-blocks',
            'icon'              => 'location-alt',
            'keywords'          => array( 'map', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'contacts',
            'title'             => __('Контакты'),
            'description'       => __('Блок контактов с формой'),
            'render_template'   => 'blocks/contacts.php',
            'category'          => 'theme-blocks',
            'icon'              => 'phone',
            'keywords'          => array( 'contacts', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'gallery-min',
            'title'             => __('Фото галлерея Mansory'),
            'description'       => __('Фотографии не пропорциональной сеткой'),
            'render_template'   => 'blocks/gallery-min.php',
            'category'          => 'theme-blocks',
            'icon'              => 'layout',
            'keywords'          => array( 'gallery','images', 'content' ),
        ));
        acf_register_block_type(array(
            'name'              => 'products',
            'title'             => __('Продукты и услуги'),
            'description'       => __(''),
            'render_template'   => 'blocks/products.php',
            'category'          => 'theme-blocks',
            'icon'              => 'cart',
            'keywords'          => array( 'gallery','products', 'content' ),
        ));
    }
}

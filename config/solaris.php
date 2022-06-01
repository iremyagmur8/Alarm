<?php

/*
 * File Types
 *
 * 1-Category
 * 2-Post
 * 3-Banner
 * 4-Gallery
 * 5-Product
 * 6-Video Gallery
 * 7-Contact
 */
return [
    'site' => [
        "name" => "Alarm Yangın",
        "url" => "https://alarm.karip.net",
    ],
    'modules' => [
        "solaris" => array(
            'name' => 'Solaris',
            'icon' => 'icon-Monitor-4 nav-thumbnail',
            'class' => '',),

        "categories" => array(
            'name' => 'Kategoriler',
            'icon' => 'icon-Bookmark nav-thumbnail',
            'class' => '',),


        "posts" => array(
            'name' => 'İçerikler',
            'icon' => 'icon-Newspaper nav-thumbnail',
            'class' => '',),

        "products" => array(
            'name' => 'Ürünler',
            'icon' => 'icon-Shop nav-thumbnail',
            'class' => '',),

        "productimages" => array(
            'name' => 'Ürün Görsel Detayları',
            'icon' => 'icon-Shop nav-thumbnail',
            'class' => '',),

        "banners" => array(
            'name' => 'Banner Alanları',
            'icon' => 'icon-Coins nav-thumbnail',
            'class' => '',),

        "videogalleries" => array(
            'name' => 'Video Galeri',
            'icon' => 'icon-Video-5 nav-thumbnail',
            'class' => '',),

        "galleries" => array(
            'name' => 'Galeri',
            'icon' => 'icon-Photo nav-thumbnail',
            'class' => '',),


        "admin" => array(
            'name' => 'Yönetim',
            'icon' => 'icon-User nav-thumbnail',
            'class' => '',),
        /*
                "settings" => array(
                    'name' => 'Ayarlar',
                    'icon' => 'icon-Gear nav-thumbnail',
                    'class' => '',),
        */
        "contact" => array(
            'name' => 'İletişim',
            'icon' => 'icon-Mail nav-thumbnail',
            'class' => '',),


    ],

    'catTypes' => [
        "icerikler" => array("id" => 0, "name" => "İçerikler"),
        "ürünler" => array("id" => 1, "name" => "Ürünler"),
        "galeriler" => array("id" => 2, "name" => "Galeriler"),
        "videolar" => array("id" => 3, "name" => "Videolar"),
    ],

    'catThemes' => [
        "2 Kutu Resimli",
        "3 Kutu Resimli",
        "4 Kutu Resimli",
        "2 Kutu Açıklamasız",
        "3 Kutu Açıklamasız",
        "4 Kutu Açıklamasız",
        "Liste",
        "Akordiyon",
        "Galeri",
    ],

    'contentThemes' => [
        "Resimli",
        "Düz Yazı",

    ],

    'galleryThemes' => [
        "Slider Yazısız",
        "Slider Yazılı",
        "Slider Yazılı ve Linkli",
    ],

    'videoThemes' => [
        "Slider Yazısız",
        "Slider Yazılı",
        "Slider Yazılı ve Linkli",
    ],

    'sex' => [
        "Slider Yazısız",
        "Slider Yazılı",
        "Slider Yazılı ve Linkli",
    ]

] ?>

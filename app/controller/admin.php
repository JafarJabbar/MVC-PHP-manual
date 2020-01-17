<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:26 PM
 */
if (!route(1)){
    $route[1]='index';
}
if (!file_exists(admin_controller($route[1]))){
    $route[1]='index';
}

if (!session('user_rank') || session('user_rank')==3 ){
    $route[1]='login';
}

$menus=[
   [
        'url'=>'index',
        'title' => 'Ana səhifə',
        'icon'=>'tachometer',
        'permissions'=>[
            'show'=>"Göstərmək"
        ]
    ],
    [
        'url'=>'users',
        'title'=>'İstfadəçilər',
        'icon'=>'user',
        'permissions'=>[
            'show'=>"Göstərmək",
            "edit"=>'Düzəltmək',
            "delete"=>"Silmək"
        ]
        ],
    [
        'url'=>'contact',
        'title'=>'Müştəri mesajları',
        'icon'=>'envelope',
        'permissions'=>[
            'show'=>"Göstərmək",
            "send"=>"Göndərmək",
            "edit"=>'Düzəltmək',
            "delete"=>"Silmək"
        ]
        ],
    [
        'url'=>'menu',
        'title' => 'Menyular',
        'icon'=>'bars',
        'permissions'=>[
            'show'=>"Göstərmək",
            "edit"=>'Düzəltmək',
            "delete"=>"Silmək",
            "add"=>"Əlavə etmək"
        ]
    ],
    [
        'url'=>'pages',
        'title' => 'Səhifələr',
        'icon'=>'file',
        'permissions'=>[
            'show'=>"Göstərmək",
            "edit"=>'Düzəltmək',
            "delete"=>"Silmək",
            "add"=>"Əlavə etmək"
        ]
    ],
    [
        'url'=>'posts',
        'title' => 'Postlar',
        'icon'=>'rss',
        'permissions'=>[
            'show'=>"Göstərmək",
            "edit"=>'Düzəltmək',
            "delete"=>"Silmək",
            "add"=>"Əlavə etmək"
        ],
        'submenu'=>[
            [
                'url'=>'posts',
                'title' => 'Postlar'
            ],
            [
                'url'=> 'tags',
                'title' => 'Etiketlər',
                'permissions'=>[
                    'show'=>"Göstərmək",
                    "edit"=>'Düzəltmək',
                    "delete"=>"Silmək",
                    "add"=>"Əlavə etmək"
                ]
            ],
            [
                'url'=>'comments',
                'title' => 'Rəylər',
                'permissions'=>[
                    'show'=>"Göstərmək",
                    "edit"=>'Düzəltmək',
                    "delete"=>"Silmək",
                ]
            ],
            [
                'url'=>'categories',
                'title' => 'Kateqoriyalar',
                'icon'=>'folder',
                'permissions'=>[
                    'show'=>"Göstərmək",
                    "edit"=>'Düzəltmək',
                    "delete"=>"Silmək",
                    "add"=>"Əlavə etmək"
                ]
            ]
        ]
    ],
    [
        'url'=>'reference',
        'title' => 'Referanslar',
        'icon'=>'photo',
        'permissions'=>[
            'show'=>"Göstərmək",
            "edit"=>'Düzəltmək',
            "delete"=>"Silmək",
            "add"=>"Əlavə etmək"
        ],
        'submenu'=>[
            [
                'url'=>'reference_categories',
                'title'=>'Referans kateqoriyaları',
                'permissions'=>[
                    'show'=>"Göstərmək",
                    "edit"=>'Düzəltmək',
                    "delete"=>"Silmək",
                    "add"=>"Əlavə etmək"
                ],
            ]

        ]
    ],


    [
        'url'=>'settings',
        'title'=>'Parametrler',
        'icon'=>'cog',
        'permissions'=>[
            'show'=>"Göstərmək",
            "edit"=>'Düzəltmək'
            ]
        ]
];

require admin_controller(route(1));

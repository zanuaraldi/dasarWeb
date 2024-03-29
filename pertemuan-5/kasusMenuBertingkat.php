<?php
    $menu = [
        [
            "nama" => "beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ],
    ];

    function tampilkanMenuBertingkat(array $menu){
        echo "<ul>";
        foreach($menu as $key => $item){
            echo "<li>{$item['nama']}";
            if (isset($item['subMenu'])) {
                tampilkanMenubertingkat($item['subMenu']);
            }
            echo "</li>";
        }
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
?>
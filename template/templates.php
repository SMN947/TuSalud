<?php
    $recetas = array(
        0 => array(
            "nombre" => "Crêpes aux légumes",
            "duracion" => "25m",
            "rating" => "5.00",
        ),
        1 => array(
            "nombre" => "Courgette rôtie",
            "duracion" => "15m",
            "rating" => "4.95",
        )
    );

    $menu = array(
        0 => array(
            "img" => "profile.jpg",
            "text" => antecedentesMedicos,
            "target" => "historiaclinica.php"
        ),
        1 => array(
            "img" => "profile.jpg",
            "text" => inventario,
            "target" => "inventario.php"
        ),
        2 => array(
            "img" => "profile.jpg",
            "text" => recetario,
            "target" => "historiaclinica.php"
        ),
        3 => array(
            "img" => "profile.jpg",
            "text" => domicilios,
            "target" => "historiaclinica.php"
        ),
        4 => array(
            "img" => "profile.jpg",
            "text" => recordatorio,
            "target" => "historiaclinica.php"
        ),
        5 => array(
            "img" => "profile.jpg",
            "text" => vincularSmart,
            "target" => "sync.php"
        ),
    );

    $medidas = array(
        0 => array(
            "name" => presionArterial,
            "id" => "bloodPreasure"
        ),1 => array(
            "name" => ritmoCardiaco,
            "id" => "beat"
        ),2 => array(
            "name" => glucosa,
            "id" => "sugar"
        ),3 => array(
            "name" => peso,
            "id" => "heavy"
        ),
    );

    $inventario = array(
        0 => array(
            "catName" => "Frutas",
            "prods" => array(
                0 => array(
                    "nombre" => "Platano",
                    "medida" => "Kg",
                    "cant" => "3",
                    "img" => "profile.jpg"
                ),1 => array(
                    "nombre" => "Manzana",
                    "medida" => "Un",
                    "cant" => "6",
                    "img" => "profile.jpg"
                )
            )
        ),
        1 => array(
            "catName" => "Verduras",
            "prods" => array(
                0 => array(
                    "nombre" => "Zanahoria",
                    "medida" => "Kg",
                    "cant" => "2",
                    "img" => "profile.jpg"
                ),1 => array(
                    "nombre" => "Tomate",
                    "medida" => "Kg",
                    "cant" => "1",
                    "img" => "profile.jpg"
                )
            )
        ),
        2 => array(
            "catName" => "Lacteos",
            "prods" => array(
                0 => array(
                    "nombre" => "Leche",
                    "medida" => "Lts",
                    "cant" => "6",
                    "img" => "profile.jpg"
                ),1 => array(
                    "nombre" => "Queso",
                    "medida" => "Kg",
                    "cant" => "1",
                    "img" => "profile.jpg"
                )
            )
        )
    );
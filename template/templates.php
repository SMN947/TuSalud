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
            "target" => "recetario.php"
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

    $recetario = array(
        0 => array(
            "nombre" => "Huevos con arroz",
            "creador" => "👩‍🍳By GabrielaP",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:50",
            "ingredientes" => "Aceite de Oliva, Arroz Blanco, Huevo Revuelto",
            "calorias" => "499 Kcal" //https://www.fatsecret.com.mx/member/kitines/meals/2568059/ARROZ+COCIDO+CON+HUEVOS+REVUELTOS
        ),1 => array(
            "nombre" => "Wrap de verduras",
            "creador" => "👩‍🍳By JenniferR",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:30",
            "ingredientes" => "Tortilla, Aceite de oliva, Berenjena, Pimientos rojos dulces, Calabacín en rodajas, Queso mozzarella",
            "calorias" => "554 kcal" //https://www.fatsecret.com.mx/member/Steph_AL/meals/342/Veggie+Wrap
        ),2 => array(
            "nombre" => "Ensalada de pollo",
            "creador" => "👩‍🍳By SandraM",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:40",
            "ingredientes" => "Tortilla, Lechuga romana, Carne de pechuga de pollo, Jícama, Vinagreta de lima",
            "calorias" => "371 kcal" //https://www.fatsecret.com.mx/member/susan5458/meals/2647/Santa+Fe+Chicken+Salad
        ),3 => array(
            "nombre" => "Burritos",
            "creador" => "👨‍🍳By SimonB",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:50",
            "ingredientes" => "Tortilla, Salsa, Salchicha, Crema Agria, Huevos Revueltos, Croquetas de papa",
            "calorias" => "695 kcal" //https://www.fatsecret.com.mx/member/kohllee/meals/790/breakfast+burrito
        )
    );
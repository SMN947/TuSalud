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
            "target" => "domicilios.php"
        ),
        4 => array(
            "img" => "profile.jpg",
            "text" => recordatorio,
            "target" => "reminder.php"
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
            "catName" => "Fruits",
            "prods" => array(
                0 => array(
                    "nombre" => "Banane",
                    "medida" => "Kg",
                    "cant" => "3",
                    "img" => "profile.jpg"
                ),1 => array(
                    "nombre" => "Pommes",
                    "medida" => "Un",
                    "cant" => "6",
                    "img" => "profile.jpg"
                )
            )
        ),
        1 => array(
            "catName" => "Légumes",
            "prods" => array(
                0 => array(
                    "nombre" => "Carottes",
                    "medida" => "Kg",
                    "cant" => "2",
                    "img" => "profile.jpg"
                ),1 => array(
                    "nombre" => "Tomates",
                    "medida" => "Kg",
                    "cant" => "1",
                    "img" => "profile.jpg"
                )
            )
        ),
        2 => array(
            "catName" => "Lactées",
            "prods" => array(
                0 => array(
                    "nombre" => "Lait",
                    "medida" => "Lts",
                    "cant" => "6",
                    "img" => "profile.jpg"
                ),1 => array(
                    "nombre" => "Fromage",
                    "medida" => "Kg",
                    "cant" => "1",
                    "img" => "profile.jpg"
                )
            )
        )
    );

    $recetario = array(
        0 => array(
            "nombre" => "Œufs et riz",
            "creador" => "👩‍🍳Par GabrielaP",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:50",
            "ingredientes" => "Huile d’Olive, Riz Blanc, Oeufs Brouillés",
            "calorias" => "499 Joule" //https://www.fatsecret.com.mx/member/kitines/meals/2568059/ARROZ+COCIDO+CON+HUEVOS+REVUELTOS
        ),1 => array(
            "nombre" => "Wrap de légumes",
            "creador" => "👩‍🍳Par JenniferR",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:30",
            "ingredientes" => "Omelette, Huile d’olive, Aubergine, Poivrons rouges doux, Courgettes en tranches, Fromage mozzarella",
            "calorias" => "554 Joule" //https://www.fatsecret.com.mx/member/Steph_AL/meals/342/Veggie+Wrap
        ),2 => array(
            "nombre" => "Salade de poulet",
            "creador" => "👩‍🍳Par SandraM",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:40",
            "ingredientes" => "Tortilla, Laitue romaine, Chair de poitrine de poulet, Jícama, Vinaigrette de citron vert",
            "calorias" => "371 Joule" //https://www.fatsecret.com.mx/member/susan5458/meals/2647/Santa+Fe+Chicken+Salad
        ),3 => array(
            "nombre" => "Burritos",
            "creador" => "👨‍🍳Par SimonB",
            "rating" => "5",
            "img" => "food1.png",
            "time" => "00:50",
            "ingredientes" => "Omelette, Sauce, Saucisse, Crème Aigre, Oeufs brouillés, Croquettes de pommes de terre",
            "calorias" => "695 Joule" //https://www.fatsecret.com.mx/member/kohllee/meals/790/breakfast+burrito
        )
    );

    $reminds = array(//https://www.who.int/medicines/publications/essentialmedicines/20th_EML2017.pdf
        0 => array(
            "nombre" => "Paracétamol",
            "img" => "medicine.png",
            "time" => "00:00",
            "dosis" => "2💊",
            "ingredientes" => "Prendre toutes les douze heures pendant une semaine."
        ),1 => array(
            "nombre" => "Dexaméthasona",
            "img" => "medicine.png",
            "time" => "10:00",
            "dosis" => "1💉",
            "ingredientes" => "Injecter toutes les 36 heures pendant 5 jours."
        ),2 => array(
            "nombre" => "Pyrantel",
            "img" => "medicine.png",
            "time" => "08:30",
            "dosis" => "1🍷",
            "ingredientes" => "Prendre une fois par jour pendant trois jours."
        ),3 => array(
            "nombre" => "Loratadine",
            "img" => "medicine.png",
            "time" => "03:00",
            "dosis" => "1/2🍷",
            "ingredientes" => "Prendre toutes les 6 heures pendant une semaine"
        )
    );
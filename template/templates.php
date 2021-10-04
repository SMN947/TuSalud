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
            "target" => "historiaclinica.php"
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
            "target" => "historiaclinica.php"
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
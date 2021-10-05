<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/recetario.css">

<div class="header" onclick="location.replace(BASEURL + '/main.php')">
    <div class="sectionTitleCont">
        <h3 class="sectionTitle"><?= recetario ?></h3>
    </div>
    <div class="backButton">
        <span class="backButtonIcon">◀</span>
    </div>
</div>
<div class="body">
    <div class="controles">
        <button class="btn addBtn">
            Ajouter
        </button>
    </div>
    <div class="recetas">
        <?php foreach ($recetario as $key => $value) { ?>
        <div class="receta">
            <img class="img" src="./images/<?= $value["img"] ?>" alt="">
            <span class="rating">⭐<?= $value["rating"] ?></span>
            <span class="creador"><?= $value["creador"] ?></span>
            <span class="nombre"><?= $value["nombre"] ?></span>
            <span class="time">⏱<?= $value["time"] ?></span>
            <span class="calorias">🔋<?= $value["calorias"] ?></span>
            <span class="ingred"><?= $value["ingredientes"] ?></span>
        </div>
        <?php }  ?>
    </div>
</div>
<?php include("./template/footer.php"); ?>
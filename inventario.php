<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/inventario.css">

<div class="header" onclick="location.replace(BASEURL + '/main.php')">
    <div class="sectionTitleCont">
        <h3 class="sectionTitle"><?= inventario ?></h3>
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
    <div class="inv">
        <?php foreach ($inventario as $key => $value) { ?>
        <div class="categoria">
            <div class="categoriaName"><?= $value["catName"] ?></div>
            <?php foreach ($value["prods"] as $key => $value) { ?>
            <div class="invElem">
                <img class="invImg" src="./images/<?= $value["img"] ?>" alt="">
                <span class="name"><?= $value["nombre"] ?></span>
                <span class="cant">
                    <span class="plus">🔼</span>
                    <span class="minus">🔽</span><?= $value["cant"] ?>
                    <span class="med"><?= $value["medida"] ?></span>
                </span>
                
            </div>
            <?php }  ?>
        </div>
        <?php }  ?>
    </div>
</div>
<?php include("./template/footer.php"); ?>
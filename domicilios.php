<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/domicilios.css">

<div class="header" onclick="location.replace(BASEURL + '/main.php')">
    <div class="sectionTitleCont">
        <h3 class="sectionTitle"><?= domicilios ?></h3>
    </div>
    <div class="backButton">
        <span class="backButtonIcon">◀</span>
    </div>
</div>
<div class="body">
    <div class="controles">
        <button class="btn leftBtn"><?= medicinas ?></button>
        <button class="btn centerBtn"><?= frutas ?></button>
        <button class="btn rightBtn"><?= verduras ?></button>
    </div>
    <div class="domicilios">
        <?php foreach ($pedidos as $key => $value) { ?>
        <div class="domicilio">
            <span class="id">🔖<?= $value["id"] ?></span>
            <span class="date">📅<?= $value["date"] ?></span>
            <span class="type"><?= $value["type"] ?></span>
            <span class="status <?= $value["status"] ?>"><?= $value["status"] ?></span>
            <hr class="hr1">
            <span class="store">🛒<?= $value["store"] ?></span>
            <span class="payment">
                <?= $value["payment"] ?>
                <span class="value">
                    <?= $value["value"] ?>
                </span>
            </span>
        </div>
        <?php }  ?>
    </div>
</div>
<!-- <script>
    setTimeout(() => {
        location.reload()
    }, 500); -->
</script>
<?php include("./template/footer.php"); ?>
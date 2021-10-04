<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/reminder.css">

<div class="header" onclick="location.replace(BASEURL + '/main.php')">
    <div class="sectionTitleCont">
        <h3 class="sectionTitle"><?= recordatorio ?></h3>
    </div>
    <div class="backButton">
        <span class="backButtonIcon">◀</span>
    </div>
</div>
<div class="body">
    <div class="controles">
        <button class="btn addBtn">
            Add
        </button>
        <button class="btn soundBtn">🎵 - Chop Suey! Syst...</button>
    </div>
    <div class="reminds">
        <?php foreach ($reminds as $key => $value) { ?>
        <div class="remind">
            <img class="img" src="./images/<?= $value["img"] ?>" alt="">
            <span class="nombre">🏷<?= $value["nombre"] ?></span>
            <span class="time">⏱Next at <?= $value["time"] ?></span>
            <span class="ingred"><?= $value["ingredientes"] ?></span>
            <span class="dosis"><?= $value["dosis"] ?></span>
        </div>
        <?php }  ?>
    </div>
</div>
<?php include("./template/footer.php"); ?>
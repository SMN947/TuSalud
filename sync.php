<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/sync.css">

<div class="header" onclick="location.replace(BASEURL + '/main.php')">
    <div class="sectionTitleCont">
        <h3 class="sectionTitle"><?= vincularSmart ?></h3>
    </div>
    <div class="backButton">
        <span class="backButtonIcon">◀</span>
    </div>
</div>
<div class="body">
    <img class="sync" src="./images/sync.ico" alt="">
    <img class="band" src="./images/band.png" alt="">
    <img class="phone" src="./images/phone.png" alt="">
    <button class="syncBTN btn"><?= sincronizar ?></button>
    <img class="blutu" src="./images/bluetooth.png" alt="">
    <span class="blutuMsg"><?= bluetoothMustBeOn ?></span>
</div>
<?php include("./template/footer.php"); ?>
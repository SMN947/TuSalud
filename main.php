<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/mainpage.css">


<div class="header">
    <div class="hola">
        <h3><?= hola ?>,</h3>
    </div>
    <div class="nombre">
        <h3><span id="nombreusuario"></span></h3>
    </div>
    <div class="profilePic">
        <img id="profilePicImg" class="profilePicImg" src="./images/profile.jpg" alt="">
    </div>
</div>
<div class="body">
    <div class="receipesTitle">
        <h3><?= topRecetas ?></h3>
    </div>
    <div class="cont">
        <div class="recetasCont" id="recetasCont">
            <?php foreach ($recetas as $key => $value) { ?>
            <div class="receipe">
                <img class="foodPic" src="./images/food<?= $key + 1 ?>.png" alt="">
                <div class="receipeDetails">
                    <span class="dishName"><?= $value["nombre"] ?></span>
                    <span class="dishDur">⏱ <?= $value["duracion"] ?></span>
                    <span class="dishRating">⭐ <?= $value["rating"] ?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>


    
    <div class="queQuiere">
        <h3><?= queNecesitas?></h3>
    </div>
    <div class="queQuiereCont">
        <?php foreach ($menu as $key => $value) { ?>
        <div class="loQueQuiere" onclick='location.replace("<?= $value["target"] ?>")'>
            <img class="loQueQuierePic" src="./images/<?= $value["img"] ?>" alt="">
            <span class="loQueQuiereName"><?= $value["text"] ?></span>
        </div>
        <?php } ?>
    </div>
</div>

<?php include("./template/footer.php"); ?>
<script src="./scripts/mainpage.js"></script>
<script>
    $("#nombreusuario").html(localStorage.getItem("name"));
    if(localStorage.getItem("name").toLowerCase().trim() == 'marina') {
        $('#profilePicImg').attr('src','./images/marina.png');
    }else{
        $('#profilePicImg').attr('src','./images/profile.jpg');
    }
</script>
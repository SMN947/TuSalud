<?php include("./template/head.php"); ?>
<div class="loginHead">
    <h1 class="FormTitle"><?= bienvenido ?></h1>
    <span class="welcomeSub"><?= bienvenidoText ?></span>
</div>
<div class="loginForm">
    <h2 class="formName"><?= SignUp ?></h2>

    <input class="loginFormInput" autocomplete="off" type="text" name="fullname" id="Regfullname" placeholder="<?= fullname ?>">
    <input class="loginFormInput" autocomplete="off" type="email" name="email" id="Regemail" placeholder="<?= email ?>">
    <input class="loginFormInput" autocomplete="off" type="password" name="password" id="Regpassword" placeholder="<?= password ?>">

    <button class="btn btnForm" onclick="signUp()"><?= SignUp ?></button>
</div>
<div class="footer">
    <span class="footerText">
        <?= haveAnAccount ?><a href="<?= BASEURL ?>/login.php"> <?= Login?></a>
    </span>
</div>
<div class="loginLogoHolder">
    <img class="imgLogin" src="./images/profile.jpg" alt="">
    <button class="updateProfileIMG">🔄</button>
</div>
<?php include("./template/footer.php"); ?>

<link rel="stylesheet" href="<?php echo BASEURL; ?>/styles/loginSignUp.css">
<script>
</script>
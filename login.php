<?php include("./template/head.php"); ?>
<div class="loginHead">
    <h1 class="FormTitle"><?= bienvenidoDeNuevo ?></h1>
    <span class="welcomeSub"><?= bienvenidoDeNuevoText ?></span>
</div>
<div class="loginForm">
    <h2 class="formName"><?= Login ?></h2>

    <input class="loginFormInput" autocomplete="off" type="email" name="email" id="Loginemail" placeholder="<?= email ?>">
    <input class="loginFormInput" autocomplete="off" type="password" name="password" id="Loginpassword" placeholder="<?= password ?>">
    <input class="loginFormInput" disabled autocomplete="off" type="text" id="errorLogin">

    <button class="btn btnForm" onclick="login()"><?= Login ?></button>
</div>
<div class="footer">
    <span class="footerText">
        <?= haveAnAccount ?><a href="<?= BASEURL ?>/signup.php"> <?= SignUp ?></a>
    </span>
</div>
<div class="loginLogoHolder">
    <img class="imgLogin" src="./images/profile.jpg" alt="">
</div>
<?php include("./template/footer.php"); ?>

<link rel="stylesheet" href="<?php echo BASEURL; ?>/styles/loginSignUp.css">
<script>
    if(localStorage.getItem("RegMsg") != null) {
        $("#errorLogin").show().val(localStorage.getItem("RegMsg"))
    }else{
        $("#errorLogin").hide()
    }
    if(localStorage.getItem("RegMsgLevel") == "error") {
        $("#errorLogin").addClass("errMsg");
        $("#errorLogin").removeClass("okMsg");
    }else{
        $("#errorLogin").removeClass("errMsg");
        $("#errorLogin").addClass("okMsg");
    }
    localStorage.removeItem("RegMsg");
    localStorage.removeItem("RegMsgLevel");
    
</script>
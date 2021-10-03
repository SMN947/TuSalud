<?php include("./template/head.php"); ?>
<div class="splash">
    <img src="./images/logo.png" class="logoSplash" alt="">
</div>
<?php include("./template/footer.php"); ?>
<script>
    setTimeout(() => {
        location.replace("<?= BASEURL."/slider.php" ?>");
    }, 2000);
</script>
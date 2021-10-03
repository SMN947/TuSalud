<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/mainpage.css">

historiaclinica :)

<?php include("./template/footer.php"); ?>
<script src="./scripts/mainpage.js"></script>
<script>
    $("#nombreusuario").html(localStorage.getItem("name"));
    setTimeout(() => {
        location.reload()
    }, 800);
</script>
<?php include("./template/head.php"); ?>
<hr class="hrprofilePic">
<img class="profilePic" src="./images/profile.jpg" alt="">
<div class="nameUser">
    <?= hola ?> <span id="nombreusuario"></span> <?= llenarDatos ?>
</div>
<div class="formContainer">

    <div class="questionsCont">
        <div class="form-group">
            <label for="exampleInputEmail1"><?= fechaNacimiento ?></label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= estatura ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= peso ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= talla ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= presentaEnfermedad ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= fechaNacimiento ?></label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= estatura ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= peso ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= talla ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= presentaEnfermedad ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
    </div>

    <button class="btn btnForm">
        <?= guardar ?>
    </button>

</div>

<?php include("./template/footer.php"); ?>
<script>
setTimeout(() => {
        location.reload()
    }, 50000000);
</script>
<link rel="stylesheet" href="./styles/firstForm.css">
<script>
    
    $("#nombreusuario").html(localStorage.getItem("name"));
</script>
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
            <input type="date" class="form-control ff" id="fechadenacimiento" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= estatura ?></label>
            <input type="email" class="form-control ff" id="estatura" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= peso ?></label>
            <input type="email" class="form-control ff" id="peso" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= talla ?></label>
            <input type="email" class="form-control ff" id="talla" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= presentaEnfermedad ?></label>
            <select onchange="haveIlls()" class="form-control ff" id="enfermedades" aria-describedby="emailHelp">
                <option value="-">-</option> 
                <option value="si">Si</option>    
                <option value="no">No</option>    
            </select>
        </div>
        <div id="enfermedadesList" class="hidden">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="diabetes">
                <label class="form-check-label" for="diabetes">Diabetes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defhipertiroidismoaultCheck1">
                <label class="form-check-label" for="hipertiroidismo">Hipertiroidismo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hipotiroidismo">
                <label class="form-check-label" for="hipotiroidismo">Hipotiroidismo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hipertension">
                <label class="form-check-label" for="hipertension">Hipertensión</label>
            </div>
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
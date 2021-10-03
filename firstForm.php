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
            <input type="date" class="form-control ff" id="fechadenacimiento">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= estatura ?> <i>(cm)</i></label>
            <input type="email" class="form-control ff" id="estatura" placeholder="170">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= peso ?> <i>(kg)</i></label>
            <input type="email" class="form-control ff" id="peso" placeholder="80">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= presentaEnfermedad ?></label>
            <select onchange="haveIlls()" class="form-control ff" id="enfermedades">
                <option value="-">-</option> 
                <option value="si">Si</option>    
                <option value="no">No</option>    
            </select>
        </div>
        <div id="enfermedadesList" class="hidden">
            <div class="form-check">
                <input class="form-check-input enfCheck" type="checkbox" value="" id="diabetes">
                <label class="form-check-label" for="diabetes"><?= Diabetes ?></label>
            </div>
            <div class="form-check">
                <input class="form-check-input enfCheck" type="checkbox" value="" id="hipertiroidismo">
                <label class="form-check-label" for="hipertiroidismo"><?= Hipertiroidismo ?></label>
            </div>
            <div class="form-check">
                <input class="form-check-input enfCheck" type="checkbox" value="" id="hipotiroidismo">
                <label class="form-check-label" for="hipotiroidismo"><?= Hipotiroidismo ?></label>
            </div>
            <div class="form-check">
                <input class="form-check-input enfCheck" type="checkbox" value="" id="hipertension">
                <label class="form-check-label" for="hipertension"><?= Hipertension ?></label>
            </div>
        </div>
    </div>

    <button class="btn btnForm" onclick="saveFirstForm()">
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
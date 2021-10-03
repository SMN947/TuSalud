<?php include("./template/head.php"); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-back">
                <img class="d-block w-100 sliderImg sliderImg1" src="<?= BASEURL ?>/images/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-text">
                <h5 class="sliderTextH5"><?= Slider1Tit ?></h5>
                <hr>
                <p class="sliderTextContent"><?= Slider1 ?></p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-back">
                <img class="d-block w-100 sliderImg" src="<?= BASEURL ?>/images/slider2.png" alt="Second slide">
            </div>
            <div class="carousel-text">
                <h5 class="sliderTextH5"><?= Slider2Tit ?></h5>
                <hr>
                <p class="sliderTextContent"><?= Slider2 ?></p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-back">
                <img class="d-block w-100 sliderImg" src="<?= BASEURL ?>/images/slider3.png" alt="Third slide">
            </div>
            <div class="carousel-text">
                <h5 class="sliderTextH5"><?= Slider3Tit ?></h5>
                <hr>
                <p class="sliderTextContent"><?= Slider3 ?></p>
            </div>
        </div>
    </div>
</div>
<button id="sliderPrev" class="sliderPrev btn btn-info hidden" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
</button>
<button class="sliderNext btn" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span id="slideNext"><?= siguiente ?></span>
</button>
<?php include("./template/footer.php"); ?>
<script>

</script>
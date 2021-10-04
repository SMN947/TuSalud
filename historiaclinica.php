<?php include("./template/head.php"); ?>
<?php include("./template/templates.php"); ?>
<link rel="stylesheet" href="./styles/historiaclinica.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<div class="header" onclick="location.replace(BASEURL + '/main.php')">
    <div class="sectionTitleCont">
        <h3 class="sectionTitle"><?= antecedentesMedicos ?></h3>
    </div>
    <div class="backButton">
        <span class="backButtonIcon">◀</span>
    </div>
</div>
<div class="body">
    <div class="chartContainer">
        <canvas id="chart"></canvas>
    </div>
    <div class="scoresContainer">
        <?php foreach ($medidas as $key => $value) { ?>
        <div class="score" onclick='viewChart("<?= $value["id"] ?>")'>
            <span class="scoreName"><?= $value["name"] ?></span>
            <span class="scoreValue" id='<?= $value["id"] ?>Value'>120</span>
            <span class="scoreUnit" id='<?= $value["id"] ?>Unit'>BPM</span>
            <span class="scoreLast" id='<?= $value["id"] ?>Last'>2020-09-31</span>
        </div>
        <?php } ?>
    </div>
</div>

<?php include("./template/footer.php"); ?>
<script src="./scripts/historiaClinica.js"></script>
<script>
    $("#nombreusuario").html(localStorage.getItem("name"));
    setTimeout(() => {
        location.reload()
    }, 80000000);
    var ctx = document.getElementById('chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: chartsData[0].data
    });

    chartsData.map((el)=> {
        var data = el.data.datasets[0].data;
        var labels = el.data.labels;
        $(`#${el.name}Value`).html(data[data.length-1]);
        $(`#${el.name}Unit`).html(el.measure);
        $(`#${el.name}Last`).html(labels[labels.length-1]);
    });

    
    function viewChart(chart) {
        chartsData.map((el)=> {
            if (el.name == chart) {
                myChart.data = el.data;
                myChart.update()
            }
        });
    }
</script>
var sistolica = []
var diastolica = []
var ritmo = []
var sugar = []
var pesos = []
var labels = formatDates(getDates(new Date(), 12))
for(var i=0;i<12;i++) {
    sistolica.push(randNum(130, 180))
    diastolica.push(randNum(80, 100))
    ritmo.push(randNum(60, 100))
    sugar.push(randNum(3.6, 4.8, true))
    pesos.push(randNum(60, 100))
}
var chartsData = [
    {
        name: "bloodPreasure",
        measure: "mmHg",
        data: {
            labels: labels,
            datasets: [{
                label: 'Pression diastolique',
                data: diastolica,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.5
            },{
                label: 'Pression systolique',
                data: sistolica,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.5
            }]
        }
    },{
        name: "beat",
        measure: "BPM",
        data: {
            labels: labels,
            datasets: [{
                label: ritmoCardiaco,
                data: ritmo,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.5
            }]
        }
    },{
        name: "sugar",
        measure: "mmol/L",
        data: {
            labels: labels,
            datasets: [{
                label: glucosa,
                data: sugar,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.5
            }]
        }
    },{
        name: "heavy",
        measure: "Kg",
        data: {
            labels: labels,
            datasets: [{
                label: peso,
                data: pesos,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.5
            }]
        }
    }
]

function randNum(min, max, f = false) {
    if(f) {
        return (Math.random() * (max - min + 1) + min).toFixed(1)
    }else{
        return Math.floor(Math.random() * (max - min + 1) + min)
    }
}

function addDays (fecha, days) {
    var date = fecha;
    date.setDate(date.getDate() + days);
    return date;
}

function getDates(startDate, cant) {
    var dateArray = new Array();
    var currentDate = startDate;
    while (cant > 1) {
        dateArray.unshift(new Date (currentDate));
        currentDate = addDays(currentDate, -1);
        cant--;
    }
    return dateArray;
}
function formatDates(a) {
    return a.map((el)=> {
        return el.toISOString().split('T')[0]
    });
}

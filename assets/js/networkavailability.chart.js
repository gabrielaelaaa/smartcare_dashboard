function availabilitytrend(players) {
    var datez = players.map(function (d) {
        tanggal = d.Day.split("-");
        return tanggal[2];
    });
    var erlangjabotabek = players.map(function (d) {
        return +d['Voice Traffic (Erlang) Jabotabek'];
    });
    var erlangcwj = players.map(function (d) {
        return +d['Voice Traffic (Erlang) CWJ'];
    });
    var erlangejbn = players.map(function (d) {
        return +d['Voice Traffic (Erlang) EJBN'];
    });
    var erlangsumatera = players.map(function (d) {
        return +d['Voice Traffic (Erlang) Sumatera'];
    });
    var erlangkalisumapa = players.map(function (d) {
        return +d['Voice Traffic (Erlang) Kalisumapa'];
    });
    var myLineChart = new Chart('availabilityTrend', {
        type: 'line',
        data: {
            labels: ["Week 34", "Week 35", "Week 36", "Week 37", "Week 38", "Week 39", "Week 40",],
            datasets: [{
                label: "Jabotabek",
                data: [85, 88, 87, 90, 84, 85, 86],
                pointRadius: 1,
                backgroundColor: [
                    'rgba(105, 0, 132, .0)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },
            {
                label: "CWJ",
                data: [85, 85, 86, 91, 87, 84, 88],
                pointRadius: 1,
                backgroundColor: [
                    'rgba(0, 137, 132, .0)',
                ],
                borderColor: [
                    'rgba(17, 140, 17, .7)',
                ],
                borderWidth: 2
            }
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 20
                }
            },
            scales: {

                yAxes: [{
                    ticks: {

                        min: 0,
                        max: 100,
                        callback: function (value) { return value + "%" }
                    },
                    scaleLabel: {
                        display: true,
                        labelString: "Percentage"
                    }
                }]
            }
        }
    });
}
d3
    .csv("Core_KQI_daily_tot_20201028.csv")
    .then(availabilitytrend);

//bar
var navData2g = new Chart('navdata2g', {
    type: 'bar',
    data: {
        labels: ["W35", "W36", "W37", "W38", "W39", "W40", "W41", "W42", "W43", "W44", "W45", "W46", "W47", "W48", "W49"],
        datasets: [{
            barPercentage: 0.5,
            label: '# of Votes',
            data: [87, 79, 73, 85, 92, 93, 90, 70, 78, 79, 87, 79, 79, 80, 91],
            backgroundColor: "lightcoral",
            borderWidth: 1,
        }]
    },
    options: {
        scales: {

            yAxes: [{
                ticks: {

                    min: 0,
                    max: 100,
                    callback: function (value) { return value + "%" }
                },
                scaleLabel: {
                    display: true,
                    labelString: "Percentage"
                }
            }],
            xAxes:[{
                barPercentage: 0.7,
                       gridLines: {
                       display:false
                   }
               }]
        },
        legend: {
            display: false,
            labels: {
                fontColor: 'rgb(255, 99, 132)'
            }
        }
    }
});

var navData3g = new Chart('navdata3g', {
    type: 'bar',
    data: {
        labels: ["W35", "W36", "W37", "W38", "W39", "W40", "W41", "W42", "W43", "W44", "W45", "W46", "W47", "W48", "W49"],
        datasets: [{
            barPercentage: 0.5,
            label: '# of Votes',
            data: [87, 79, 73, 85, 92, 93, 90, 70, 78, 79, 87, 79, 79, 80, 91],
            backgroundColor: "#f39c12",
            borderWidth: 1,
        }]
    },
    options: {
        scales: {

            yAxes: [{
                ticks: {

                    min: 0,
                    max: 100,
                    callback: function (value) { return value + "%" }
                },
                scaleLabel: {
                    display: true,
                    labelString: "Percentage"
                }
            }],
            xAxes:[{
                barPercentage: 0.7,
                       gridLines: {
                       display:false
                   }
               }]
        },
        legend: {
            display: false,
            labels: {
                fontColor: 'rgb(255, 99, 132)'
            }
        }
    }
});

var navData4g = new Chart('navdata4g', {
    type: 'bar',
    data: {
        labels: ["W35", "W36", "W37", "W38", "W39", "W40", "W41", "W42", "W43", "W44", "W45", "W46", "W47", "W48", "W49"],
        datasets: [{
            barPercentage: 0.5,
            label: '# of Votes',
            data: [87, 79, 73, 85, 92, 93, 90, 70, 78, 79, 87, 79, 79, 80, 91],
            backgroundColor: "#2ecc71",
            borderWidth: 1,
        }]
    },
    options: {
        scales: {

            yAxes: [{
                ticks: {

                    min: 0,
                    max: 100,
                    callback: function (value) { return value + "%" }
                },
                scaleLabel: {
                    display: true,
                    labelString: "Percentage"
                }
            }],
            xAxes:[{
                barPercentage: 0.7,
                       gridLines: {
                       display:false
                   }
               }]
        },
        legend: {
            display: false,
            labels: {
                fontColor: 'rgb(255, 99, 132)'
            }
        }
    }
});
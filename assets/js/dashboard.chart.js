//line
// var ctxL = document.getElementById("lineChart").getContext('2d');
// ctxL.height
var chartVoiceTraffic = new Chart('lineChart', {
    type: 'line',
    data: {
        labels: voice.tanggal,
        datasets: [{
                label: "Jabotabek",
                data: voice.jabotabek,
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
                data: voice.cwj,
                pointRadius: 1,
                backgroundColor: [
                    'rgba(0, 137, 132, .0)',
                ],
                borderColor: [
                    'rgba(17, 140, 17, .7)',
                ],
                borderWidth: 2
            },
            {
                label: "EJBN",
                data: voice.ejbn,
                pointRadius: 1,
                backgroundColor: [
                    'rgba(0, 137, 132, .0)',
                ],
                borderColor: [
                    'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
            },
            {
                label: "Sumatera",
                data: voice.sumatera,
                pointRadius: 1,
                backgroundColor: [
                    'rgba(0, 137, 132, .0)',
                ],
                borderColor: [
                    'rgba(223, 223, 20, .7)',
                ],
                borderWidth: 2
            },
            {
                label: "Kalisumapa",
                data: voice.kalisumapa,
                pointRadius: 1,
                backgroundColor: [
                    'rgba(0, 137, 132, .0)',
                ],
                borderColor: [
                    'rgba(85, 48, 11, .7)',
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
    }
});

//line
// var ctxL2 = document.getElementById("lineChart2").getContext('2d');
var chartNationalSubscriber = new Chart('lineChart2', {
    type: 'line',
    data: {
        labels: natsubscriber.tanggal,
        datasets: [{
                label: "VLR",
                data: natsubscriber.vlr,
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
                label: "SGSN",
                data: natsubscriber.attach,
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
    }
});


var chartDataTraffic = new Chart('lineChart4', {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 56, 55, 40],
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
                label: "My Second dataset",
                data: [28, 48, 40, 19, 86, 27, 90],
                pointRadius: 1,
                backgroundColor: [
                    'rgba(0, 137, 132, .0)',
                ],
                borderColor: [
                    'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        }
    }
});

var chartNetworkAvailability = new Chart('lineChart5', {
    type: 'line',
    data: {
        labels: networkavailability.tanggal,
        datasets: [{
            label: "4G",
            data: networkavailability.fourg,
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
            label: "3G",
            data: networkavailability.threeg,
            pointRadius: 1,
            backgroundColor: [
                'rgba(105, 0, 132, .0)',
            ],
            borderColor: [
                'rgba(105, 39, 232, .7)',
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: 'bottom',
            display: true,
            labels: {
                boxWidth: 20
            }
        },
        scales: {

            yAxes: [{
                ticks: {
                    callback: function(value) {
                        return value + "%"
                    }
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    },
});

//doughnut 1
var ctxD = document.getElementById("doughnutChart").getContext('2d');
var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
        labels: ["GSM", "DCS"],
        datasets: [{
            data: [300, 300],
            backgroundColor: ["#F7464A", "#46BFBD"],
            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        }
    }
});

//doughnut 2
var ctxD2 = document.getElementById("doughnutChart2").getContext('2d');
var myLineChart = new Chart(ctxD2, {
    type: 'doughnut',
    data: {
        labels: ["U900", "U2100"],
        datasets: [{
            data: [32, 68],
            backgroundColor: ["#949FB1", "#4D5360"],
            hoverBackgroundColor: ["#A8B3C5", "#616774"]
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        }
    }
});

//doughnut
var ctxD3 = document.getElementById("doughnutChart3").getContext('2d');
var myLineChart = new Chart(ctxD3, {
    type: 'doughnut',
    data: {
        labels: ["GSM", "DCS"],
        datasets: [{
            data: [300, 50, 100, 40, 120],
            backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        }
    }
});

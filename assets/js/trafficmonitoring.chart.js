var natdatatraffic = new Chart('tpr-natdatatraffic', {
    type: 'line',
    data: {
        labels: ["2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01",],
        datasets: [{
            label: "National",
            data: [85, 88, 87, 90, 84, 85, 86],
            pointRadius: 1,
            backgroundColor: [
                'rgba(83, 205, 215, .0)',
            ],
            borderColor: [
                'rgba(83, 205, 215, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "2G",
            data: [75, 75, 76, 81, 77, 74, 78],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(100, 141, 216, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "3G",
            data: [66, 64, 67, 70, 68, 63, 69],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(238, 186, 155, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "4G",
            data: [58, 52, 59, 62, 56, 55, 61],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(211, 123, 123, .9)',
            ],
            borderWidth: 3
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
                    beginAtZero: true
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    }
});

var natvoicetraffic = new Chart('tpr-natvoicetraffic', {
    type: 'line',
    data: {
        labels: ["2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01",],
        datasets: [{
            label: "National",
            data: [85, 88, 87, 90, 84, 85, 86],
            pointRadius: 1,
            backgroundColor: [
                'rgba(83, 205, 215, .0)',
            ],
            borderColor: [
                'rgba(83, 205, 215, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "2G",
            data: [75, 75, 76, 81, 77, 74, 78],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(100, 141, 216, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "3G",
            data: [66, 64, 67, 70, 68, 63, 69],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(238, 186, 155, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "4G",
            data: [58, 52, 59, 62, 56, 55, 61],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(211, 123, 123, .9)',
            ],
            borderWidth: 3
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
                    beginAtZero: true
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    }
});

var natattachsubs = new Chart('tpr-natattachsubs', {
    type: 'line',
    data: {
        labels: ["2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01",],
        datasets: [{
            label: "National",
            data: [85, 88, 87, 90, 84, 85, 86],
            pointRadius: 1,
            backgroundColor: [
                'rgba(83, 205, 215, .0)',
            ],
            borderColor: [
                'rgba(83, 205, 215, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "2G",
            data: [75, 75, 76, 81, 77, 74, 78],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(100, 141, 216, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "3G",
            data: [66, 64, 67, 70, 68, 63, 69],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(238, 186, 155, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "4G",
            data: [58, 52, 59, 62, 56, 55, 61],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(211, 123, 123, .9)',
            ],
            borderWidth: 3
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
                    beginAtZero: true
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    }
});

var natsmsmoattempt = new Chart('tpr-natsmsmoattempt', {
    type: 'line',
    data: {
        labels: ["2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01",],
        datasets: [{
            label: "National",
            data: [85, 88, 87, 90, 84, 85, 86],
            pointRadius: 1,
            backgroundColor: [
                'rgba(83, 205, 215, .0)',
            ],
            borderColor: [
                'rgba(83, 205, 215, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "2G",
            data: [75, 75, 76, 81, 77, 74, 78],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(100, 141, 216, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "3G",
            data: [66, 64, 67, 70, 68, 63, 69],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(238, 186, 155, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "4G",
            data: [58, 52, 59, 62, 56, 55, 61],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(211, 123, 123, .9)',
            ],
            borderWidth: 3
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
                    beginAtZero: true
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    }
});

var nationaldatatraffic = new Chart('nationaldatatraffic', {
    type: 'line',
    data: {
        labels: ["2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01", "2020-01-01",],
        datasets: [{
            label: "National",
            data: [85, 88, 87, 90, 84, 85, 86],
            pointRadius: 1,
            backgroundColor: [
                'rgba(83, 205, 215, .0)',
            ],
            borderColor: [
                'rgba(83, 205, 215, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "2G",
            data: [75, 75, 76, 81, 77, 74, 78],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(100, 141, 216, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "3G",
            data: [66, 64, 67, 70, 68, 63, 69],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(238, 186, 155, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "4G",
            data: [58, 52, 59, 62, 56, 55, 61],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(211, 123, 123, .9)',
            ],
            borderWidth: 3
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
                    beginAtZero: true
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    }
});

var nationalvoicetraffic = new Chart('nationalvoicetraffic', {
    type: 'line',
    data: {
        labels: ["Week 34", "Week 35", "Week 36", "Week 37", "Week 38", "Week 39", "Week 40",],
        datasets: [{
            label: "National",
            data: [85, 88, 87, 90, 84, 85, 86],
            pointRadius: 1,
            backgroundColor: [
                'rgba(83, 205, 215, .0)',
            ],
            borderColor: [
                'rgba(83, 205, 215, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "2G",
            data: [75, 75, 76, 81, 77, 74, 78],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(100, 141, 216, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "3G",
            data: [66, 64, 67, 70, 68, 63, 69],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(238, 186, 155, .9)',
            ],
            borderWidth: 3
        },
        {
            label: "4G",
            data: [58, 52, 59, 62, 56, 55, 61],
            pointRadius: 1,
            backgroundColor: [
                'rgba(100, 141, 216, .0)',
            ],
            borderColor: [
                'rgba(211, 123, 123, .9)',
            ],
            borderWidth: 3
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

var nationalvoicetraffic = new Chart('nationalattachedsubscriber', {
    type: 'line',
    data: {
        labels: ["Week 34", "Week 35", "Week 36", "Week 37", "Week 38", "Week 39", "Week 40",],
        datasets: [{
            label: "Jabotabek",
            data: [3510000, 3570000, 3560000, 3700000, 3710000, 3500000, 3750000],
            pointRadius: 1,
            backgroundColor: [
                'rgba(230, 156, 113, .1)',
            ],
            borderColor: [
                'rgba(230, 156, 113, .7)',
            ],
            borderWidth: 3
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
                    min:3000000
                },
                scaleLabel: {
                    display: false,
                    labelString: "Percentage"
                }
            }]
        }
    }
});

var nationalvoicetraffic = new Chart('nationalsmsmoattempt', {
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
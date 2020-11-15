function nFormatter(num, digits) {
    var si = [
      { value: 1, symbol: "" },
      { value: 1E3, symbol: "k" },
      { value: 1E6, symbol: "M" },
      { value: 1E9, symbol: "G" },
      { value: 1E12, symbol: "T" },
      { value: 1E15, symbol: "P" },
      { value: 1E18, symbol: "E" }
    ];
    var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
    var i;
    for (i = si.length - 1; i > 0; i--) {
      if (num >= si[i].value) {
        break;
      }
    }
    return (num / si[i].value).toFixed(digits).replace(rx, "$1") + si[i].symbol;
  }
//line
// var ctxL = document.getElementById("lineChart").getContext('2d');
// ctxL.height
function voiceerlang(players) {
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
    var myLineChart = new Chart('lineChart', {
        type: 'line',
        data: {
            labels: datez,
            datasets: [{
                label: "Jabotabek",
                data: erlangjabotabek,
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
                data: erlangcwj,
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
                data: erlangejbn,
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
                data: erlangsumatera,
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
                data: erlangkalisumapa,
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
}
// d3
//   .csv("http://localhost/Core_KQI_daily_tot_20201028.csv")
//   .then(voiceerlang);
// $(document).ready(function(){
//     d3.csv("Core_KQI_daily_tot_20201028.csv").then(function(data) {
//         // console.log(data[0]);
//         lastweek = data[data.length-2]['VLR Subscriber Register'];
//         nowweek = data[data.length-1]['VLR Subscriber Register'];
//         percentage = nowweek/lastweek*100;
//         increase = percentage-100;
//         console.log(increase.toFixed(2) + "%");
//         $('#vlrregister-persen').text(increase.toFixed(2) + " %");
//         total = parseFloat(data[data.length-1]['VLR Subscriber Register']);
//         $('#vlrregister-sum').text(nFormatter(total,2) + " subs")
//         if(increase<0) {
//             $('#vlrregister-persen').css("color", "red");
//             $('#vlrregister-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
//         } else {
//             $('#vlrregister-persen').css("color", "forestgreen");
//             $('#vlrregister-icon').html(`
//             <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
//             `);
//         }
//         lastweek = data[data.length-2]['VLR Subscriber Attach'];
//         nowweek = data[data.length-1]['VLR Subscriber Attach'];
//         percentage = nowweek/lastweek*100;
//         increase = percentage-100;
//         $('#vlrattach-persen').text(increase.toFixed(2) + " %");
//         total = parseFloat(data[data.length-1]['VLR Subscriber Attach']);
//         $('#vlrattach-sum').text(nFormatter(total,2) + " subs")
//         if(increase<0) {
//             $('#vlrattach-persen').css("color", "red");
//             $('#vlrattach-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
//         } else {
//             $('#vlrattach-persen').css("color", "forestgreen");
//             $('#vlrattach-icon').html(`
//             <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
//             `);
//         }
//         lastweek = data[data.length-2]['Voice (Erlang)'];
//         nowweek = data[data.length-1]['Voice (Erlang)'];
//         percentage = (nowweek/lastweek*100)-100;
//         $('#voicetotal-persen').text(percentage.toFixed(2) + " %");
//         total = parseFloat(data[data.length-1]['Voice (Erlang)']);
//         $('#voicetotal-sum').text(nFormatter(total,2) + " subs")
//         if(percentage<0) {
//             $('#voicetotal-persen').css("color", "red");
//             $('#voicetotal-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
//         } else {
//             $('#voicetotal-persen').css("color", "forestgreen");
//             $('#voicetotal-icon').html(`
//             <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
//             `);
//         }
//       });
// });
  
//line
// var ctxL2 = document.getElementById("lineChart2").getContext('2d');
function vlrsubscriber(players) {
    var datez = players.map(function (d) {
        tanggal = d.Day.split("-");
        return tanggal[2];
    });
    var register = players.map(function (d) {
        return +d['VLR Subscriber Register'];
    });
    var attach = players.map(function (d) {
        return +d['VLR Subscriber Attach'];
    });
    var myLineChart2 = new Chart('lineChart2', {
        type: 'line',
        data: {
            labels: datez,
            datasets: [{
                label: "VLR Register Subs",
                data: register,
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
                label: "VLR Attach Subs",
                data: attach,
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
}
d3
  .csv("http://localhost/Core_KQI_daily_tot_20201028.csv")
  .then(vlrsubscriber);

//line
// var ctxL3 = document.getElementById("lineChart3").getContext('2d');
var myLineChart3 = new Chart('lineChart3', {
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

//MAP

jQuery(document).ready(function () {
    jQuery('#vmap').vectorMap({
        map: 'indonesia_id',
        backgroundColor: '#fff',
        color: '#31ace8',
        hoverOpacity: 0.7,
        selectedColor: '#666666',
        enableZoom: true,
        showTooltip: true,
        selectedColor: null,
        onRegionClick: function (event, code, region) {
            event.preventDefault();
        }
    });
});

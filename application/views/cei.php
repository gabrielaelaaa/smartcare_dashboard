<?php $this->view('template/_head'); ?>
<?php $this->view('template/_sidebar'); ?>
<?php $this->view('template/_navbar'); ?>
<!-- Content Here -->
<!-- <span class='judul'>Dashboard Home</span> -->
<div class='contentwrap pt-2'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Cell Level CEI</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Chart-->
                                <div id="chart_level_subscriber"></div>
                                <!--end::Chart-->
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Subcriber Level CEI</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Chart-->
                                <div id="chart_app_level"></div>
                                <!--end::Chart-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">App CEI Site Level</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Chart-->
                                <div id="chart_app_level_cei"></div>
                                <!--end::Chart-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div> -->
            </div>
            <div class="col-6">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            <div id="vmap" style="width: 100%; height: 500px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->view('template/_jsresource'); ?>
<!-- Own Javascript Here -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.chart.js"></script> -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.table.js"></script> -->

<script src="<?= base_url(); ?>assets/metronic/plugins/global/plugins.bundle.js"></script>
<!-- <script src="<?= base_url(); ?>assets/metronic/plugins/custom/prismjs/prismjs.bundle.js"></script> -->
<!-- <script src="<?= base_url(); ?>assets/metronic/js/scripts.bundle.js"></script> -->
<script type="text/javascript" src="<?= base_url(); ?>assets/dist/jquery.vmap.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/dist/maps/jquery.vmap.indonesia.js" charset="utf-8"></script>
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#6993FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<script src="<?= base_url(); ?>assets/metronic/js/pages/features/charts/apexcharts.js"></script>
<script>
    // jQuery(document).ready(function() {

    // });
    var base_url = "<?= base_url() ?>"
    var state = {
        seleted_region: "",
        weeks_xaxis: ""
    };
    const chart_level_subscriber = "#chart_level_subscriber";
    const chart_app_level = "#chart_app_level";
    const chart_app_level_cei = "#chart_app_level_cei";
    var chart;
    $('#sidebar li').click(function() {
        if ($('#sidebar').hasClass("active")) {
            $('#sidebar').removeClass("active");
            $(".togname").show();
        }
    });

    $(document).ready(function() {
        if (!$("nav").hasClass("active")) {
            $(".togname").show();
        } else {
            $(".togname").hide();
        }
        $("#sidebarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
            if (!$("nav").hasClass("active")) {
                $(".togname").show();
            } else {
                $(".togname").hide();
            }
        });
        $("#sidebarCollapse2").on("click", function() {
            $("#sidebar").toggleClass("active");
            if (!$("nav").hasClass("active")) {
                $(".togname").show()
            } else {
                $(".togname").hide();
            }
        });

        var options1 = {
            series: [{
                name: 'detractor',
                data: [0, 0, 0, 0],
            }, {
                name: 'passive',
                data: [0, 0, 0, 0],
            }, {
                name: 'promoter',
                data: [0, 0, 0, 0],
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            title: {
                text: "",
            },
            xaxis: {
                categories: state.weeks_xaxis,
                labels: {
                    formatter: function(val) {
                        return val
                    }
                }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + "K"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            },
            colors: ['#F44336', '#28df99', '#43658b']
        };
        var options2 = {
            series: [{
                name: 'dectrator',
                data: [0, 0, 0, 0],
            }, {
                name: 'passive',
                data: [0, 0, 0, 0],
            }, {
                name: 'promoter',
                data: [0, 0, 0, 0],
            }, ],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            title: {
                text: "",
            },
            xaxis: {
                categories: state.weeks_xaxis,
                labels: {
                    formatter: function(val) {
                        return val
                    }
                }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + "K"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            },
            colors: ['#af2d2d', '#f9813a', '#f1e189', '#cee397', '#baf1a1']
        };
        var options3 = {
            series: [{
                name: 's0s',
                data: [],
            }, {
                name: 's60s',
                data: [],
            }, {
                name: 's70s',
                data: [],
            }, {
                name: 's80s',
                data: [],
            }, {
                name: 's90s',
                data: [],
            }, ],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            title: {
                text: "",
            },
            xaxis: {
                categories: ["all", "im", "sms", "stream", "voice", "web"],
                // labels: {
                //     formatter: function(val) {
                //         return val
                //     }
                // }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + "K"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            },
            colors: ['#af2d2d', '#f9813a', '#f1e189', '#cee397', '#baf1a1']
        };

        $.ajax({
            url: base_url + "CeiController/loadData",
            type: "GET",
            dataType: 'json',
            async: false,
            success: function(respon) {
                console.log(respon)
                if (respon.status == true) {
                    state.weeks_xaxis = respon.weeks;
                    // chart1.destroy();
                    // reload_chart1(respon.data);
                    // console.log(respon.data[0].promoter)
                } else {

                }
            },
            error: function() {}

        });
        options1.xaxis.categories = state.weeks_xaxis;
        options2.xaxis.categories = state.weeks_xaxis;
        options3.xaxis.categories = state.weeks_xaxis;

        chart1 = new ApexCharts(document.querySelector(chart_level_subscriber), options1);
        chart1.render();
        // const apexChart = "#chart_isat";
        // 
        chart2 = new ApexCharts(document.querySelector(chart_app_level), options2);
        chart2.render();

        chart3 = new ApexCharts(document.querySelector(chart_app_level_cei), options3);
        chart3.render();
        my_maps();
    });

    function reloadDataCellLevelCei(region) {
        let url = "<?= base_url() ?>/CeiController/getDataSubscriberCeiRegion";
        let param = {
            region
        };
        $.ajax({

            url: url,

            type: "POST",

            dataType: 'json',

            data: param,

            // async: false,

            // cache: false,

            // contentType: false,

            // enctype: 'multipart/form-data',

            // processData: false,

            success: function(respon) {
                // console.log(respon.data)
                // return;
                if (respon.status == true) {
                    chart1.destroy();
                    reload_chart1(respon.data);
                    // console.log(respon.data[0].promoter)
                } else {}
            },
            error: function() {}

        });
    }

    function reloadDataSubscriberLevelCei(region) {
        let url = "<?= base_url() ?>/CeiController/getSubcriberLevelCei";
        let param = {
            region
        };
        $.ajax({

            url: url,

            type: "POST",

            dataType: 'json',

            data: param,

            // async: false,

            // cache: false,

            // contentType: false,

            // enctype: 'multipart/form-data',

            // processData: false,

            success: function(respon) {
                // console.log(respon.data)
                // return;
                if (respon.status == true) {
                    chart2.destroy();
                    reload_chart2(respon.data);
                    // console.log(respon.data[0].promoter)
                } else {}
            },
            error: function() {}

        });
    }

    function reloadDataAppCeiSiteLevel(region) {
        let url = "<?= base_url() ?>/CeiController/getDataSubscriberCeiRegion";
        let param = {
            region
        };
        $.ajax({

            url: url,

            type: "POST",

            dataType: 'json',

            data: param,

            // async: false,

            // cache: false,

            // contentType: false,

            // enctype: 'multipart/form-data',

            // processData: false,

            success: function(respon) {
                // console.log(respon.data)
                // return;
                if (respon.status == true) {
                    chart3.destroy();
                    reload_chart3(respon.data);
                    // console.log(respon.data[0].promoter)
                } else {}
            },
            error: function() {}

        });
    }

    var reload_chart1 = function(data) {
        // const apexChart = "#chart_isat";
        var options = {
            series: [{
                name: 'detractor',
                data: [data[3].data.detractor, data[2].data.detractor, data[1].data.detractor, data[0].data.detractor],
            }, {
                name: 'passive',
                data: [data[3].data.passive, data[2].data.passive, data[1].data.passive, data[0].data.passive]
            }, {
                name: 'promoter',
                data: [data[3].data.promoter, data[2].data.promoter, data[1].data.promoter, data[0].data.promoter]
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            title: {
                text: "state_seleted",
            },
            xaxis: {
                categories: state.weeks_xaxis,
                labels: {
                    formatter: function(val) {
                        return val
                    }
                }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + "K"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            },
            colors: ['#F44336', '#28df99', '#43658b']
        };

        chart1 = new ApexCharts(document.querySelector(chart_level_subscriber), options);
        chart1.render();
    }
    var reload_chart2 = function(data) {
        // const apexChart = "#chart_isat";
        var options2 = {
            series: [{
                name: 'detractor',
                data: [data[3].data.detractor, data[2].data.detractor, data[1].data.detractor, data[0].data.detractor],
            }, {
                name: 'passive',
                data: [data[3].data.passive, data[2].data.passive, data[1].data.passive, data[0].data.passive]
            }, {
                name: 'promoter',
                data: [data[3].data.promoter, data[2].data.promoter, data[1].data.promoter, data[0].data.promoter]
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            title: {
                text: "",
            },
            xaxis: {
                categories: state.weeks_xaxis,
                labels: {
                    formatter: function(val) {
                        return val
                    }
                }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + "K"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            },
            colors: ['#af2d2d', '#f9813a', '#f1e189']
        };

        chart2 = new ApexCharts(document.querySelector(chart_app_level), options2);
        chart2.render();
    }
    var reload_chart3 = function(data) {
        // const apexChart = "#chart_isat";
        var options3 = {
            series: [{
                name: 's0s',
                data: [4, 5, 7, 8, 2, 1],
            }, {
                name: 's60s',
                data: [3, 8, 4, 1, 1, 8],
            }, {
                name: 's70s',
                data: [3, 4, 2, 6, 9, 2],
            }, {
                name: 's80s',
                data: [9, 9, 8, 2, 4, 1],
            }, {
                name: 's90s',
                data: [4, 2, 1, 6, 7, 8],
            }, ],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            title: {
                text: "",
            },
            xaxis: {
                categories: ["all", "im", "sms", "stream", "voice", "web"],
                // labels: {
                //     formatter: function(val) {
                //         return val
                //     }
                // }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + "K"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            },
            colors: ['#af2d2d', '#f9813a', '#f1e189', '#cee397', '#baf1a1']
        };

        chart3 = new ApexCharts(document.querySelector(chart_app_level_cei), options3);
        chart3.render();
    }

    function my_maps() {
        var code_EAST_JAVA_BALI_NUSRA = ["path15", "path17", "path18", "path19"];
        var code_CENTRAL_WEST_JAVA = ["path12", "path13", "path16"];
        var code_JABODETABEK = ["path11"];
        var code_KALISUMAPA = [
            "path20",
            "path21",
            "path22",
            "path23",
            "path24",
            "path25",
            "path26",
            "path27",
            "path28",
            "path29",
            "path30",
            "path33",
            "path34",
        ];
        var code_SUMATERA = [
            "path01",
            "path02",
            "path03",
            "path04",
            "path05",
            "path06",
            "path07",
            "path08",
            "path09",
            "path10",
        ];

        let colorSeleceted = "#14274e";
        const regionArray = [code_EAST_JAVA_BALI_NUSRA, code_CENTRAL_WEST_JAVA, code_JABODETABEK, code_KALISUMAPA, code_SUMATERA]
        const colorRegion = ["#c9dfaf", "#edf285", "#adb36e", "#ec5858", "#ffa45b", "#2d6187"];
        let colors_region = {};
        for (i = 0; i <= 4; i++) {
            colors_region = Object.assign(colors_region, changeColorRegion(regionArray[i], colorRegion[i]))
        }

        $('#vmap').vectorMap({
            map: 'indonesia_id',
            backgroundColor: '#ffffff',
            color: '#333333',
            colors: colors_region,
            enableZoom: true,
            showTooltip: true,
            selectedColor: null,
            hoverColor: null,
            onRegionClick: function(event, code, region) {
                event.preventDefault();
                reloadDataCellLevelCei(state.region_selected);
                reloadDataSubscriberLevelCei(state.region_selected);
                reloadDataAppCeiSiteLevel(state.region_selected);
            },
            onRegionOver: function(element, code, region) {
                state.region_selected = "0";
                if (code_EAST_JAVA_BALI_NUSRA.indexOf(code) !== -1) {
                    state.region_selected = "region1";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_EAST_JAVA_BALI_NUSRA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_EAST_JAVA_BALI_NUSRA, colorRegion[0]));
                }
                if (code_CENTRAL_WEST_JAVA.indexOf(code) !== -1) {
                    state.region_selected = "region2";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_CENTRAL_WEST_JAVA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_CENTRAL_WEST_JAVA, colorRegion[1]));
                }
                if (code_JABODETABEK.indexOf(code) !== -1) {
                    state.region_selected = "region3";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_JABODETABEK, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_JABODETABEK, colorRegion[2]));
                }
                if (code_KALISUMAPA.indexOf(code) !== -1) {
                    state.region_selected = "region4";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_KALISUMAPA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_KALISUMAPA, colorRegion[3]));
                }
                if (code_SUMATERA.indexOf(code) !== -1) {
                    state.region_selected = "region5";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_SUMATERA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_SUMATERA, colorRegion[4]));
                }
            }
        });
        // $("#vmap").vectorMap({
        //     map: "indonesia_id",
        //     backgroundColor: '#ffffff',
        //     color: '#333333',
        //     colors: SUMATERA,
        //     enableZoom: false,
        //     // hoverColor: "#c9dfaf",
        //     // hoverOpacity: null,
        //     // normalizeFunction: "linear",
        //     // scaleColors: ["#b6d6ff", "#005ace"],
        //     // selectedColor: "#c9dfaf",
        //     selectedRegions: null,
        //     multiSelectRegion: false,
        //     showTooltip: true,
        //     onRegionClick: function(element, code_kota, region) {
        //         event.preventDefault();
        //         // console.log(state_seleted);                
        //         reloadDataLevelSubscriber(state.region_selected);
        //         reloadDataAppLevel();
        //         reloadAppLevelCei();
        //     },
        //     onLabelShow: function(event, label, code_kota) {
        //         $(".jqvmap-region").attr("fill", "#FFFFFF");
        //         let label2 = code_EAST_JAVA_BALI_NUSRA.some(function(dt, index) {
        //             return dt == code_kota;
        //         });
        //         if (label2 == true) {
        //             state.region_selected = "region1";
        //             label.html("EAST_JAVA_BALI_NUSRA");
        //             $("#vmap").vectorMap("set", "colors", EAST_JAVA_BALI_NUSRA);
        //         } else {
        //             label2 = code_CENTRAL_WEST_JAVA.some(function(dt, index) {
        //                 return dt == code_kota;
        //             });
        //             if (label2 == true) {
        //                 state.region_selected = "region2";
        //                 label.html("CENTRAL_WEST_JAVA");
        //                 $("#vmap").vectorMap("set", "colors", CENTRAL_WEST_JAVA);
        //             } else {
        //                 label2 = code_JABODETABEK.some(function(dt, index) {
        //                     return dt == code_kota;
        //                 });
        //                 if (label2 == true) {
        //                     state.region_selected = "region3";
        //                     label.html("JABODETABEK");
        //                     $("#vmap").vectorMap("set", "colors", JABODETABEK);
        //                 } else {
        //                     label2 = code_KALISUMAPA.some(function(dt, index) {
        //                         return dt == code_kota;
        //                     });
        //                     if (label2 == true) {
        //                         state.region_selected = "region4";
        //                         label.html("KALISUMAPA");
        //                         $("#vmap").vectorMap("set", "colors", KALISUMAPA);
        //                     } else {
        //                         label2 = code_SUMATERA.some(function(dt, index) {
        //                             return dt == code_kota;
        //                         });
        //                         // console.log(label2)
        //                         if (label2 == true) {
        //                             state.region_selected = "region5";
        //                             label.html("SUMATERA");
        //                             $("#vmap").vectorMap("set", "colors", SUMATERA);
        //                         } else {
        //                             state.region_selected = "";
        //                             event.preventDefault();
        //                         }
        //                     }
        //                 }
        //             }
        //         }
        //     },
        // });
    }

    function changeColorRegion(region, color) {
        let obj_new = {};
        region.forEach(element => {
            obj_new[element] = color;
        });
        return obj_new;
    }
</script>

<?php $this->view('template/_footer'); ?>
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
                                    <h3 class="card-label">Chart CEI Subscriber</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Chart-->
                                <div id="chart_isat"></div>
                                <!--end::Chart-->
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
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
                            <div id="vmap" style="width: 100%; height: 300px;">
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

        $("#vmap").vectorMap({
            map: "indonesia_id",
            backgroundColor: "white",
            color: "grey",
            enableZoom: false,
            showTooltip: true,
            selectedColor: "white",
            onRegionClick: function(event, code, region) {
                event.preventDefault();
                console.log(region);
            },
        });
        _demo4();
    });

    var _demo4 = function() {
        const apexChart = "#chart_isat";
        var options = {
            series: [{
                name: 'promoter',
                data: [44, 55, 41, 37]
            }, {
                name: 'passive',
                data: [53, 32, 33, 52]
            }, {
                name: 'detractor',
                data: [12, 17, 11, 9]
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
                text: "CENTRAL_WEST JAVA",
            },
            xaxis: {
                categories: [1, 2, 3, 4],
                labels: {
                    formatter: function(val) {
                        return "week"+val
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
            colors: [primary, success, warning, danger, info]
        };

        var chart = new ApexCharts(document.querySelector(apexChart), options);
        chart.render();
    }
</script>

<?php $this->view('template/_footer'); ?>
<?php $this->view('template/_head'); ?>
<?php $this->view('template/_sidebar'); ?>
<?php $this->view('template/_navbar'); ?>
<!-- Content Here -->
<span class='judul'>Network Availability</span>
<div class='contentwrap pt-2'>

    <div class="container-fluid">
        <div class="card p-4 pt-0">
            <!-- Tab -->
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="btn btn-rounded btn-outline-elegant btn-sm active">Availability Trend</a>
                        </li>
                        <li class="nav-item">
                            <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="btn btn-rounded btn-outline-elegant btn-sm">Availability Tier</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- xx End Tab xx -->

            <!-- Tab Content -->
            <div class="tab-content" id="myTabContentJust">
                <!-- Tab Availability Trend -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-12">
                            <canvas id="availabilityTrend" class="mt-5" height="80"></canvas>
                        </div>
                        <div class="col-12 my-4">
                            <div class="text-center">
                                <b>% Delta ( W to W )</b>
                                <div class="row d-flex justify-content-center mt-3">
                                    <div class="col-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="grey-text">0.06 % <div class="float-right"><i class="fas fa-caret-up"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="small"><b>All System</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="red-text">0.06 % <div class="float-right"><i class="fas fa-caret-up"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="small"><b>2G</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="purple-text">0.06 % <div class="float-right"><i class="fas fa-caret-up"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="small"><b>3G</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="light-blue-text">0.06 % <div class="float-right"><i class="fas fa-caret-up"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="small"><b>4G</b></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <table id="network" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Week</th>
                                        <th scope="col">National Nav
                                        </th>
                                        <th scope="col">2G
                                        </th>
                                        <th scope="col">3G
                                        </th>
                                        <th scope="col">4G
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">W35</th>
                                        <td>98.21%</td>
                                        <td>96.14%</td>
                                        <td>97.30%</td>
                                        <td>96.66%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">W36</th>
                                        <td>98.21%</td>
                                        <td>96.14%</td>
                                        <td>97.30%</td>
                                        <td>96.66%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">W37
                                        </th>
                                        <td>98.21%</td>
                                        <td>96.14%</td>
                                        <td>97.30%</td>
                                        <td>96.66%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">W38
                                        </th>
                                        <td>98.21%</td>
                                        <td>96.14%</td>
                                        <td>97.30%</td>
                                        <td>96.66%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">W39
                                        </th>
                                        <td>98.21%</td>
                                        <td>96.14%</td>
                                        <td>97.30%</td>
                                        <td>96.66%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">W40
                                        </th>
                                        <td>98.21%</td>
                                        <td>96.14%</td>
                                        <td>97.30%</td>
                                        <td>96.66%</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- xx End Tab Availability Trend xx -->

                <!-- Tab Availability Tier -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="h4">NAV Data 2G</div>
                            </div>
                            <canvas id="navdata2g" height="80"></canvas>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="text-center">
                                <div class="h4">NAV Data 3G</div>
                            </div>
                            <canvas id="navdata3g" height="80"></canvas>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="text-center">
                                <div class="h4">NAV Data 4G</div>
                            </div>
                            <canvas id="navdata4g" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <!-- xx End Tab Availability Tier xx -->
            </div>
            <!-- End Tab Content -->
        </div>
    </div>
</div>

<?php $this->view('template/_jsresource'); ?>
<!-- Own Javascript Here -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/networkavailability.chart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/networkavailability.table.js"></script>
<script>
    $('#sidebar li').click(function() {
        if ($('#sidebar').hasClass("active")) {
            $('#sidebar').removeClass("active");
            $(".togname").show();
        }
    });
    jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
            map: 'indonesia_id',
            backgroundColor: '#fff',
            color: '#333',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            selectedColor: null,
            onRegionClick: function(event, code, region) {
                event.preventDefault();
            }
        });
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

    });
</script>
<?php $this->view('template/_footer'); ?>
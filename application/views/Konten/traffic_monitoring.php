<!-- Content Here -->
<div class='content-wrapper'>

    <div class="container-fluid">
        <div class="card p-4 pt-0">
            <!-- TAB -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true" class="btn btn-rounded btn-outline-elegant btn-sm active">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a id="national-traffic-tab" data-toggle="tab" href="#nationaltraffic" role="tab" aria-controls="nationaltraffic" aria-selected="false" class="btn btn-rounded btn-outline-elegant btn-sm">National Traffic</a>
                        </li>
                        <li class="nav-item">
                            <a id="traffic-region-tab" data-toggle="tab" href="#trafficregion" role="tab" aria-controls="trafficregion" aria-selected="false" class="btn btn-rounded btn-outline-elegant btn-sm">Traffic Per Region</a>
                        </li>
                        <li class="nav-item">
                            <a id="traffic-comparison-tab" data-toggle="tab" href="#trafficcomparison" role="tab" aria-controls="trafficcomparison" aria-selected="false" class="btn btn-rounded btn-outline-elegant btn-sm">Traffic Comparison</a>
                        </li>
                        <li class="nav-item">
                            <a id="traffic-gi-tab" data-toggle="tab" href="#trafficgi" role="tab" aria-controls="trafficgi" aria-selected="false" class="btn btn-rounded btn-outline-elegant btn-sm">Traffic Gi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END TAB -->

            <!-- TAB CONTENT -->
            <div class="tab-content" id="myTabContentJust">
                <!-- DASHBOARD TAB -->
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="row mb-3">
                        <div class="col-12">
                            <form class="form-inline">
                                <div class="form-group mb-2">
                                    <select class="browser-default custom-select">
                                        <option selected>Real Time</option>
                                        <option value="1">Daily</option>
                                    </select>
                                </div>
                                <div class="form-group ml-sm-3 mb-2">
                                    <input type="input" class="form-control" id="inputDate">
                                </div>
                                <div class="form-group ml-sm-3 mb-2">
                                    <select class="browser-default custom-select">
                                        <option selected>21.00</option>
                                        <option value="1">Daily</option>
                                    </select>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h6">National Data Traffic</div>
                            <div id="vmap" class="mt-3" style="width: 100%; height: 300px;">
                            </div>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="h6">National Voice Traffic</div>
                            <div id="vmap2" class="mt-3" style="width: 100%; height: 300px;">
                            </div>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="h6">National Attached Subscriber</div>
                            <div id="vmap3" class="mt-3" style="width: 100%; height: 300px;">
                            </div>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="h6">National SMS MO Attempt</div>
                            <div id="vmap4" class="mt-3" style="width: 100%; height: 300px;">
                            </div>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END DASHBOARD TAB -->

                <!-- NATIONAL TRAFFIC TAB -->
                <div class="tab-pane fade" id="nationaltraffic" role="tabpanel" aria-labelledby="national-traffic-tab">
                    <div class="row">
                        <div class="col">
                            <div class="text-center"><b>National Data Traffic</b></div>
                            <canvas id="nationaldatatraffic" class="mt-3" height="80"></canvas>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="text-center"><b>National Voice Traffic (Erlang)</b></div>
                            <canvas id="nationalvoicetraffic" class="mt-3" height="80"></canvas>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="text-center"><b>National Attached Subscriber</b></div>
                            <canvas id="nationalattachedsubscriber" class="mt-3" height="80"></canvas>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="text-center"><b>National SMS MO Attempt</b></div>
                            <canvas id="nationalsmsmoattempt" class="mt-3" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END NATIONAL TRAFFIC TAB -->

                <!-- TRAFFIC PER REGION TAB -->
                <div class="tab-pane fade" id="trafficregion" role="tabpanel" aria-labelledby="traffic-region-tab">
                    <div class="row mb-3">
                        <div class="col-12">
                            <form class="form-inline float-right">
                                <div class="form-group mb-2">
                                    <select class="browser-default custom-select">
                                        <option selected>Real Time</option>
                                        <option value="1">Daily</option>
                                    </select>
                                </div>
                                <div class="form-group ml-sm-3 mb-2">
                                    <input type="input" class="form-control" id="inputDate2">
                                </div>
                                <div class="form-group ml-sm-3 mb-2">
                                    <select class="browser-default custom-select">
                                        <option selected>21.00</option>
                                        <option value="1">Daily</option>
                                    </select>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- TPR National Data Traffic -->
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center mb-3"><b>National Data Traffic</b></div>
                        </div>
                        <div class="col-6">
                            <canvas id="tpr-natdatatraffic" class="mt-3"></canvas>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- TPR National Voice Traffic (Erlang) -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="text-center mb-3"><b>National Voice Traffic (Erlang)</b></div>
                        </div>
                        <div class="col-6">
                            <canvas id="tpr-natvoicetraffic" class="mt-3"></canvas>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- TPR National Attached Subscriber -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="text-center mb-3"><b>National Attached Subscriber</b></div>
                        </div>
                        <div class="col-6">
                            <canvas id="tpr-natattachsubs" class="mt-3"></canvas>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- TPR National SMS Mo Attempt -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="text-center mb-3"><b>National SMS Mo Attempt</b></div>
                        </div>
                        <div class="col-6">
                            <canvas id="tpr-natsmsmoattempt" class="mt-3"></canvas>
                        </div>
                        <div class="col-6">
                            <table id="mspool" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Week 6</th>
                                        <th scope="col">Week 7</th>
                                        <th scope="col">Delta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">National</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Balomsum</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabo</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">East Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">West Java</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">9.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END TRAFFIC PER REGION TAB -->

                <!-- TRAFFIC COMPARISON TAB -->
                <div class="tab-pane fade" id="trafficcomparison" role="tabpanel" aria-labelledby="traffic-comparison-tab">
                    <div class="row">
                        <div class="col-12">
                            z
                        </div>
                    </div>
                </div>
                <!-- END TRAFFIC COMPARISON TAB -->

                <!-- TRAFFIC GI TAB -->
                <div class="tab-pane fade" id="trafficgi" role="tabpanel" aria-labelledby="traffic-gi-tab">
                    <div class="row">
                        <div class="col-12">
                            z
                        </div>
                    </div>
                </div>
                <!-- END TRAFFIC GI TAB -->
            </div>
            <!-- END TAB CONTENT -->
        </div>
    </div>
</div>

<?php $this->view('template/_jsresource'); ?>
<!-- Own Javascript Here -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/trafficmonitoring.chart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/trafficmonitoring.table.js"></script>
<script>
    $("#inputDate").datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    }).datepicker("update", "02/11/2020");
    $("#inputDate2").datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    }).datepicker("update", "02/11/2020");

    jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
            map: 'indonesia_id',
            backgroundColor: '#fff',
            color: '#3a2e9a',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            selectedColor: null,
            onRegionClick: function(event, code, region) {
                event.preventDefault();
            }
        });
        jQuery('#vmap2').vectorMap({
            map: 'indonesia_id',
            backgroundColor: '#fff',
            color: '#31ace8',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            selectedColor: null,
            onRegionClick: function(event, code, region) {
                event.preventDefault();
            }
        });
        jQuery('#vmap3').vectorMap({
            map: 'indonesia_id',
            backgroundColor: '#fff',
            color: '#ac219a',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            selectedColor: null,
            onRegionClick: function(event, code, region) {
                event.preventDefault();
            }
        });
        jQuery('#vmap4').vectorMap({
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

    });
</script>
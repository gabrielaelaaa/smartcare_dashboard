<!-- Content Here -->
<!-- <span class='judul'>Dashboard Home</span> -->
<!-- <div class='contentwrap pt-2'> -->
<div class="content-wrapper">

    <div class="container-fluid">
        <div class="card p-4 pt-0">
            <h6 class="card-title" style="font-weight:600">Traffic Monitoring</h6>
            <span class="text-muted">November</span>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <span class="mb-2">Data Traffic</span>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">Voice</strong>
                                        <small class="db text-muted">4,78 MErl</small>
                                    </div>
                                    <div class="col pl-0">
                                        <i class="fas fa-question-circle float-right" style="font-size:40px;color:orange"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="db persen" style="color:orange">0.28
                                            %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="lineChart4" height="180"></canvas>
                </div>
                <div class="col-md-12 col-lg-3">
                    <span class="mb-2">Voice Traffic</span>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">Traffic Total</strong>
                                        <small id="voicetotal-sum" class="db text-muted">53.518
                                            Erlang</small>
                                    </div>
                                    <div class="col pl-0">
                                        <div id="voicetotal-icon">
                                            <i class="fas fa-question-circle float-right" style="font-size:40px;color:orange"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="voicetotal-persen" class="db persen voiceerlang">0.28
                                            %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                                            <div class='custom1'>
                                                <div class="row">
                                                    <div class="col pr-0">
                                                        <strong class="db">SGSN</strong>
                                                        <small class="db text-muted">-43.518 Subs</small>
                                                    </div>
                                                    <div class="col pl-0">
                                                        <i class="fas fa-chevron-circle-down float-right"
                                                            style="font-size:40px;color:red"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="db persen" style="color:red">-0.18 %</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                    </div>
                    <canvas id="lineChart" height="180"></canvas>
                </div>
                <div class="col-md-6 col-lg-3">
                    <span class="mb-2">Network Availability</span>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">Today Availability</strong>
                                        <small id="netavail-sum" class="db text-muted">53.518
                                            Erlang</small>
                                    </div>
                                    <div class="col pl-0">
                                        <div id="netavail-icon">
                                            <i class="fas fa-question-circle float-right" style="font-size:40px;color:orange"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="netavail-persen" class="db persen voiceerlang">0.28
                                            %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="lineChart5" height="180"></canvas>
                </div>
                <div class="col-md-6 col-lg-3">
                    <span class="mb-2">National Subscriber</span>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class='custom1' data-toggle="tooltip" title="VLR Register Subscriber">
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">VLR</strong>
                                        <small id="nsactive-sum" class="db text-muted">53.518
                                            Subs</small>
                                    </div>
                                    <div class="col pl-0">
                                        <div id="nsactive-icon"><i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="nsactive-persen" class="db persen vlrsubs">0.28
                                            %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class='custom1' data-toggle="tooltip" title="SGSN Attach Subscriber(2G+3G) + MME Attach Subscriber(4G)">
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">SGSN</strong>
                                        <small id="nsattach-sum" class="db text-muted">-43.518
                                            Subs</small>

                                    </div>
                                    <div class="col pl-0">
                                        <div id="nsattach-icon"><i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="nsattach-persen" class="db persen vlrattach" style="color:forestgreen">-0.18 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="lineChart2" height="180"></canvas>
                    <!--  -->

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 pr-0">
                <div class="row">
                    <div class="col-12">
                        <!-- Network at Glance -->
                        <div class="card p-4 mt-3">
                            <h6 class="card-title" style="font-weight:600">Network at Glance -
                                Radio
                            </h6>
                            <div class="row">

                                <div class="col">
                                    <div class="row">
                                        <div class="col-4">
                                            <span class='judul' style="font-weight:600">2G</span>
                                            <canvas id="doughnutChart"></canvas>
                                        </div>
                                        <div class="col-4">
                                            <span class='judul' style="font-weight:600">3G</span>
                                            <canvas id="doughnutChart2"></canvas>
                                        </div>
                                        <div class="col-4">
                                            <span class='judul' style="font-weight:600">4G</span>
                                            <canvas id="doughnutChart3"></canvas>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div id="vmap" style="width: 100%; height: 300px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Network at Glance-->
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-5 pr-0">
                        <div class="card p-4 mt-3 heightfull">
                            <h6 class="card-title" style="font-weight:600">Performance Check
                            </h6>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="card p-4 mt-3 heightfull">
                            <h6 class="card-title" style="font-weight:600">National TCP KQI Analysis</h6>
                            <div class="row">
                                <div class="col-3">
                                    <div style="text-align: center;">
                                        <span class='judul'>TCP Success Rate</span>
                                        <canvas width=250 height=150 id="gauge1"></canvas>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div style="text-align: center;">
                                        <span class='judul'>Client Side RTT Rate</span>
                                        <canvas width=250 height=150 id="gauge2"></canvas>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div style="text-align: center;">
                                        <span class='judul'>Server Side RTT Rate</span>
                                        <canvas width=250 height=150 id="gauge3"></canvas>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div style="text-align: center;">
                                        <span class='judul'>PDP Success Rate</span>
                                        <canvas width=250 height=150 id="gauge4"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-5">
                                    <span class='judul mb-2'>Total Traffic (GB)</span>
                                    <canvas id="chart2" height="200"></canvas>
                                </div>
                                <div class="col-5">
                                    <span class='judul mb-2'>Packet Loss Rate</span>
                                    <canvas id="chart3" height="200"></canvas>
                                </div>
                                <div class="col-2">
                                    <div class="row mt-4">

                                        <div class='custom1'>
                                            <div class="row">
                                                <div class="col pr-0">
                                                    <strong class="db">E2E Delay</strong>
                                                </div>
                                                <div class="col pl-0">
                                                    <i class="fas fa-question-circle float-right" style="font-size:40px;color:orange"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="db persen" style="color:orange">4,78 Ms
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-4">
                                        <div class='custom1'>
                                            <div class="row">
                                                <div class="col pr-0">
                                                    <strong class="db">E2E Step1 Delay</strong>
                                                    <small class="db text-muted">4,78 Ms</small>
                                                </div>
                                                <div class="col pl-0">
                                                    <i class="fas fa-question-circle float-right" style="font-size:40px;color:orange"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="db persen" style="color:orange">0.28
                                                        %</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <table id="mspool" class="table table-striped">
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
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-4 mt-3 heightfull">
                    <h6 class="card-title" style="font-weight:600">Top 10 App</h6>
                    <div class="row">

                        <div class="col">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id=" payload" data-toggle="tab" href="#payload" role="tab" aria-controls="payload" aria-selected="true">Payload</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="throu-tab" data-toggle="tab" href="#throughput" role="tab" aria-controls="throughput" aria-selected="false">Throughput</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="throu-tab" data-toggle="tab" href="#local" role="tab" aria-controls="local" aria-selected="false">Local</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="throu-tab" data-toggle="tab" href="#international" role="tab" aria-controls="international" aria-selected="false">International</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="throu-tab" data-toggle="tab" href="#latency" role="tab" aria-controls="latency" aria-selected="false">Latency</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="throu-tab" data-toggle="tab" href="#pl" role="tab" aria-controls="pl" aria-selected="false">Packet Loss</a>
                                </li>
                            </ul>
                            <div class="tab-content p-0" id="myTabContent">
                                <div class="tab-pane fade show active" id="payload" role="tabpanel" aria-labelledby="payload">
                                    <ul class="list-group">

                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon1" name="geticon1"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname1" name="appname1"></span>
                                                                <p><small> <span id="payloadvalue1" name="payloadvalue1"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon2" name="geticon2"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname2" name="appname2"></span>
                                                                <p><small> <span id="payloadvalue2" name="payloadvalue2"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon3" name="geticon3"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname3" name="appname3"></span>
                                                                <p><small> <span id="payloadvalue3" name="payloadvalue3"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon4" name="geticon4"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname4" name="appname4"></span>
                                                                <p><small> <span id="payloadvalue4" name="payloadvalue4"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon5" name="geticon5"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname5" name="appname5"></span>
                                                                <p><small> <span id="payloadvalue5" name="payloadvalue5"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon6" name="geticon6"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname6" name="appname6"></span>
                                                                <p><small> <span id="payloadvalue6" name="payloadvalue6"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon7" name="geticon7"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname7" name="appname7"></span>
                                                                <p><small> <span id="payloadvalue7" name="payloadvalue7"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon8" name="geticon8"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname8" name="appname8"></span>
                                                                <p><small> <span id="payloadvalue8" name="payloadvalue8"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon9" name="geticon9"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname9" name="appname9"></span>
                                                                <p><small> <span id="payloadvalue9" name="payloadvalue9"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <span id="geticon10" name="geticon10"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                <span id="appname10" name="appname10"></span>
                                                                <p><small> <span id="payloadvalue10" name="payloadvalue10"></span> GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>2,5%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="throughput" role="tabpanel" aria-labelledby="throu-tab">
                                    Throughput
                                </div>
                                <div class="tab-pane fade" id="local" role="tabpanel" aria-labelledby="local-tab">
                                    Local
                                </div>
                                <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">International</div>
                                <div class="tab-pane fade" id="latency" role="tabpanel" aria-labelledby="latency-tab">Latency</div>
                                <div class="tab-pane fade" id="pl" role="tabpanel" aria-labelledby="pl-tab">Packet Loss</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card p-4 mt-3">
                    <h6 class="card-title" style="font-weight:600">Top 4 Roaming Inbound and
                        Outbound
                    </h6>
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center">
                                <b>INBOUND</b>
                            </div>
                            <div><small><b>NATIONAL</b></small></div>
                            <div class="row d-flex justify-content-around">
                                <div class="col-4">
                                    <span class="text-muted">User : </span>
                                    158,590
                                </div>
                                <div class="col-4">
                                    <span class="text-muted">LUSR (%) : </span>
                                    99,72 %
                                </div>
                                <div class="col-4">
                                    <span class="text-muted">Delta (%) : </span>
                                    -22.92 %
                                </div>
                            </div>
                            <table id="inbound" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Country
                                        </th>
                                        <th scope="col">User
                                        </th>
                                        <th scope="col">LUSR (%)
                                        </th>
                                        <th scope="col">Delta (%)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><i class="netherlands flag"></i>
                                            Netherland</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="china flag"></i> China</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="singapore flag"></i> Singapore
                                        </th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="australia flag"></i> Australia
                                        </th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <b>OUTBOUND</b>
                            </div>
                            <div><small><b>NATIONAL</b></small></div>
                            <div class="row d-flex justify-content-around">
                                <div class="col-4">
                                    <span class="text-muted">User : </span>
                                    158,590
                                </div>
                                <div class="col-4">
                                    <span class="text-muted">LUSR (%) : </span>
                                    99,72 %
                                </div>
                                <div class="col-4">
                                    <span class="text-muted">Delta (%) : </span>
                                    -22.92 %
                                </div>
                            </div>
                            <table id="outbound" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Country
                                        </th>
                                        <th scope="col">User
                                        </th>
                                        <th scope="col">LUSR (5%)
                                        </th>
                                        <th scope="col">Delta (%)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><i class="netherlands flag"></i>
                                            Netherland</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">9.3 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="china flag"></i> China</th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-danger">2.3 % <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="singapore flag"></i> Singapore
                                        </th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">11.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="australia flag"></i> Australia
                                        </th>
                                        <td>107,775.51</td>
                                        <td>107,775.51</td>
                                        <td><span class="badge badge-pill badge-success">1.5 %
                                                <i class="fas fa-caret-up"></i></span></td>
                                    </tr>

                                </tbody>
                            </table>

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
<script>
    // Formatter
    function nFormatter(num, digits) {
        var si = [{
                value: 1,
                symbol: ""
            },
            {
                value: 1E3,
                symbol: "k"
            },
            {
                value: 1E6,
                symbol: "M"
            },
            {
                value: 1E9,
                symbol: "G"
            },
            {
                value: 1E12,
                symbol: "T"
            },
            {
                value: 1E15,
                symbol: "P"
            },
            {
                value: 1E18,
                symbol: "E"
            }
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
</script>
<script>
    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // Json Decode
    var datanetavailability = JSON.parse('<?= $networkavailability; ?>');
    var datanatsubscriber = JSON.parse(' <?= $natsubscriber; ?>');
    var datavoicetraffic = JSON.parse('<?= $voicetraffic; ?>');

    // Voice Traffic
    var voice = {
        'tanggal': [],
        'total': [],
        'jabotabek': [],
        'cwj': [],
        'ejbn': [],
        'sumatera': [],
        'kalisumapa': []
    }
    datavoicetraffic.forEach(function(value, index) {
        tanggal = value.tanggal.substring(3, 5)
        voice.tanggal.push(tanggal);
        voice.total.push(value.total);
        voice.jabotabek.push(value.jabotabek);
        voice.cwj.push(value.cwj);
        voice.ejbn.push(value.ejbn);
        voice.sumatera.push(value.sumatera);
        voice.kalisumapa.push(value.kalisumapa);
    })

    // National Subscriber
    var natsubscriber = {
        'tanggal': [],
        'active': [],
        'attach': [],
        'vlr': [],
        'sgsn': []
    }
    datanatsubscriber.forEach(function(value, index) {
        tanggal = value.tanggal.substring(3, 5)
        natsubscriber.tanggal.push(tanggal);
        natsubscriber.active.push(value.active);
        natsubscriber.attach.push(value.attach);
        natsubscriber.vlr.push(value.vlr);
        natsubscriber.sgsn.push(value.sgsn);
    })

    // Network Availability
    var networkavailability = {
        'tanggal': [],
        'fourg': [],
        'threeg': []
    }
    datanetavailability.forEach(function(value, index) {
        tanggal = value.tanggal.substring(3, 5)
        networkavailability.tanggal.push(tanggal);
        percent = parseFloat(value.fourg);
        networkavailability.fourg.push(percent);
        percent = parseFloat(value.threeg);
        networkavailability.threeg.push(percent);
    })

    // Total Widget
    // Voice Traffic
    nv_nowweek = datavoicetraffic[datavoicetraffic.length - 1].total;
    nv_lastweek = datavoicetraffic[datavoicetraffic.length - 2].total;
    nv_delta = (nv_nowweek / nv_lastweek * 100) - 100;
    $('#voicetotal-persen').text(nv_delta.toFixed(2) + " %");
    total = parseFloat(datavoicetraffic[datavoicetraffic.length - 1].total);
    $('#voicetotal-sum').text(nFormatter(total, 2) + " erlang")
    if (nv_delta < 0) {
        $('#voicetotal-persen').css("color", "red");
        $('#voicetotal-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
    } else {
        $('#voicetotal-persen').css("color", "forestgreen");
        $('#voicetotal-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
    }

    // National Subscriber
    // Active
    nv_nowweek = datanatsubscriber[datanatsubscriber.length - 1].vlr;
    nv_lastweek = datanatsubscriber[datanatsubscriber.length - 2].vlr;
    nv_delta = (nv_nowweek / nv_lastweek * 100) - 100;
    $('#nsactive-persen').text(nv_delta.toFixed(2) + " %");
    total = parseFloat(datanatsubscriber[datanatsubscriber.length - 1].vlr);
    $('#nsactive-sum').text(nFormatter(total, 2) + " Subs")
    if (nv_delta < 0) {
        $('#nsactive-persen').css("color", "red");
        $('#nsactive-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
    } else {
        $('#nsactive-persen').css("color", "forestgreen");
        $('#nsactive-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
    }
    // Attach
    nv_nowweek = datanatsubscriber[datanatsubscriber.length - 1].attach;
    nv_lastweek = datanatsubscriber[datanatsubscriber.length - 2].attach;
    nv_delta = (nv_nowweek / nv_lastweek * 100) - 100;
    $('#nsattach-persen').text(nv_delta.toFixed(2) + " %");
    total = parseFloat(datanatsubscriber[datanatsubscriber.length - 1].attach);
    $('#nsattach-sum').text(nFormatter(total, 2) + " Subs")
    if (nv_delta < 0) {
        $('#nsattach-persen').css("color", "red");
        $('#nsattach-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
    } else {
        $('#nsattach-persen').css("color", "forestgreen");
        $('#nsattach-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
    }

    // Network Availability
    nv_nowweek = parseFloat(datanetavailability[datanetavailability.length - 1].fourg);
    nv_lastweek = parseFloat(datanetavailability[datanetavailability.length - 2].fourg);
    nv_delta = nv_nowweek - nv_lastweek;
    $('#netavail-persen').text(nv_delta.toFixed(2) + " %");
    total = parseFloat(datanetavailability[datanetavailability.length - 1].fourg);
    $('#netavail-sum').text(nFormatter(total, 2) + " %");
    if (nv_delta < 0) {
        $('#netavail-persen').css("color", "red");
        $('#netavail-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
    } else {
        $('#netavail-persen').css("color", "forestgreen");
        $('#netavail-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
    }
</script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.chart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.table.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/gauge.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/gauge.min.js"></script>
<script>
    var base_url = "<?= base_url() ?>"

    $(document).ready(function() {

        // gauge
        var opts = {
            angle: 0, // The span of the gauge arc
            lineWidth: 0.3, // The line thickness
            radiusScale: 0.95,
            pointer: {
                length: 0.5, // // Relative to gauge radius
                strokeWidth: 0.082, // The thickness
                color: '#000000' // Fill color
            },
            maxValue: 100,
            staticLabels: {
                font: "10px sans-serif", // Specifies font
                labels: [0, 50, 100], // Print labels at these values
                color: "#000000", // Optional: Label text color
            },
            minValue: 0,
            animationSpeed: 32,
            limitMax: false, // If false, max value increases automatically if value > maxValue
            limitMin: false, // If true, the min value of the gauge will be fixed
            strokeColor: '#E0E0E0', // to see which ones work best for you
            staticZones: [{
                    strokeStyle: "#F03E3E",
                    min: 0,
                    max: 35
                }, // Red from 100 to 130
                {
                    strokeStyle: "#FFDD00",
                    min: 36,
                    max: 65
                }, // Yellow
                {
                    strokeStyle: "#30B32D",
                    min: 66,
                    max: 100
                } // Green
            ],
            generateGradient: true,
            highDpiSupport: true, // High resolution support

        };
        var target = document.getElementById('gauge1'); // your canvas element
        var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
        gauge.set(100); // set actual value

        var target2 = document.getElementById('gauge2'); // your canvas element
        var gauge2 = new Gauge(target2).setOptions(opts); // create sexy gauge!
        gauge2.set(100); // set actual value

        var target3 = document.getElementById('gauge3'); // your canvas element
        var gauge3 = new Gauge(target3).setOptions(opts); // create sexy gauge!
        gauge3.set(100); // set actual value

        var target4 = document.getElementById('gauge4'); // your canvas element
        var gauge4 = new Gauge(target4).setOptions(opts); // create sexy gauge!
        gauge4.set(100); // set actual value
        // gauge

        // bar
        let data_total_traffic;
        $.ajax({
            url: base_url + "Dashboard/loadData",
            type: "GET",
            dataType: 'json',
            async: false,
            success: function(respon) {
                // console.log(respon)
                if (respon.status == true) {
                    console.log(respon)
                    state.weeks_xaxis = respon.weeks;
                    $('#week').html("<i>(week " + respon.weeks[3] + ")</i>")
                    data_detractor_CellLevelCEI = [respon.dataCellLevelCEI.data[3].data.detractor, respon.dataCellLevelCEI.data[2].data.detractor, respon.dataCellLevelCEI.data[1].data.detractor, respon.dataCellLevelCEI.data[0].data.detractor]
                    data_passive_CellLevelCEI = [respon.dataCellLevelCEI.data[3].data.passive, respon.dataCellLevelCEI.data[2].data.passive, respon.dataCellLevelCEI.data[1].data.passive, respon.dataCellLevelCEI.data[0].data.passive]
                    data_promoter_CellLevelCEI = [respon.dataCellLevelCEI.data[3].data.promoter, respon.dataCellLevelCEI.data[2].data.promoter, respon.dataCellLevelCEI.data[1].data.promoter, respon.dataCellLevelCEI.data[0].data.promoter]

                    data_detractor_SubcriberLevelCei = [respon.dataSubcriberLevelCei.data[3].data.detractor, respon.dataSubcriberLevelCei.data[2].data.detractor, respon.dataSubcriberLevelCei.data[1].data.detractor, respon.dataSubcriberLevelCei.data[0].data.detractor]
                    data_passive_SubcriberLevelCei = [respon.dataSubcriberLevelCei.data[3].data.passive, respon.dataSubcriberLevelCei.data[2].data.passive, respon.dataSubcriberLevelCei.data[1].data.passive, respon.dataSubcriberLevelCei.data[0].data.passive]
                    data_promoter_SubcriberLevelCei = [respon.dataSubcriberLevelCei.data[3].data.promoter, respon.dataSubcriberLevelCei.data[2].data.promoter, respon.dataSubcriberLevelCei.data[1].data.promoter, respon.dataSubcriberLevelCei.data[0].data.promoter]
                    //    console.log(respon.dataAppCeiSiteLevel.data.length > 0);
                    if (respon.dataAppCeiSiteLevel.data.length > 0) {
                        s0s = [respon.dataAppCeiSiteLevel.data[0]['s0s'], respon.dataAppCeiSiteLevel.data[1]['s0s'], respon.dataAppCeiSiteLevel.data[2]['s0s'], respon.dataAppCeiSiteLevel.data[3]['s0s'], respon.dataAppCeiSiteLevel.data[4]['s0s'], respon.dataAppCeiSiteLevel.data[5]['s0s'], respon.dataAppCeiSiteLevel.data[6]['s0s'], respon.dataAppCeiSiteLevel.data[7]['s0s'], respon.dataAppCeiSiteLevel.data[8]['s0s'], respon.dataAppCeiSiteLevel.data[9]['s0s'], respon.dataAppCeiSiteLevel.data[10]['s0s']]
                        s60s = [respon.dataAppCeiSiteLevel.data[0]['s60s'], respon.dataAppCeiSiteLevel.data[1]['s60s'], respon.dataAppCeiSiteLevel.data[2]['s60s'], respon.dataAppCeiSiteLevel.data[3]['s60s'], respon.dataAppCeiSiteLevel.data[4]['s60s'], respon.dataAppCeiSiteLevel.data[5]['s60s'], respon.dataAppCeiSiteLevel.data[6]['s60s'], respon.dataAppCeiSiteLevel.data[7]['s60s'], respon.dataAppCeiSiteLevel.data[8]['s60s'], respon.dataAppCeiSiteLevel.data[9]['s60s'], respon.dataAppCeiSiteLevel.data[10]['s60s']]
                        s70s = [respon.dataAppCeiSiteLevel.data[0]['s70s'], respon.dataAppCeiSiteLevel.data[1]['s70s'], respon.dataAppCeiSiteLevel.data[2]['s70s'], respon.dataAppCeiSiteLevel.data[3]['s70s'], respon.dataAppCeiSiteLevel.data[4]['s70s'], respon.dataAppCeiSiteLevel.data[5]['s70s'], respon.dataAppCeiSiteLevel.data[6]['s70s'], respon.dataAppCeiSiteLevel.data[7]['s70s'], respon.dataAppCeiSiteLevel.data[8]['s70s'], respon.dataAppCeiSiteLevel.data[9]['s70s'], respon.dataAppCeiSiteLevel.data[10]['s70s']]
                        s80s = [respon.dataAppCeiSiteLevel.data[0]['s80s'], respon.dataAppCeiSiteLevel.data[1]['s80s'], respon.dataAppCeiSiteLevel.data[2]['s80s'], respon.dataAppCeiSiteLevel.data[3]['s80s'], respon.dataAppCeiSiteLevel.data[4]['s80s'], respon.dataAppCeiSiteLevel.data[5]['s80s'], respon.dataAppCeiSiteLevel.data[6]['s80s'], respon.dataAppCeiSiteLevel.data[7]['s80s'], respon.dataAppCeiSiteLevel.data[8]['s80s'], respon.dataAppCeiSiteLevel.data[9]['s80s'], respon.dataAppCeiSiteLevel.data[10]['s80s']]
                        s90s = [respon.dataAppCeiSiteLevel.data[0]['s90s'], respon.dataAppCeiSiteLevel.data[1]['s90s'], respon.dataAppCeiSiteLevel.data[2]['s90s'], respon.dataAppCeiSiteLevel.data[3]['s90s'], respon.dataAppCeiSiteLevel.data[4]['s90s'], respon.dataAppCeiSiteLevel.data[5]['s90s'], respon.dataAppCeiSiteLevel.data[6]['s90s'], respon.dataAppCeiSiteLevel.data[7]['s90s'], respon.dataAppCeiSiteLevel.data[8]['s90s'], respon.dataAppCeiSiteLevel.data[9]['s90s'], respon.dataAppCeiSiteLevel.data[10]['s90s']]
                    }
                } else {
                    console.log(respon.gettotaltraffic.data[0][id])
                }
            },
            error: function() {}

        });
        var options2 = {
            type: 'bar',
            // data: {
            //     labels: state.weeks_xaxis,
            //     datasets: [{
            //             label: 'detractor',
            //             // data: data_detractor_SubcriberLevelCei,
            //             backgroundColor: '#F44336',
            //         },
            //         {
            //             label: 'passive',
            //             // data: data_passive_SubcriberLevelCei,
            //             backgroundColor: '#28df99',
            //         },
            //         {
            //             label: 'promoter',
            //             // data: data_promoter_SubcriberLevelCei,
            //             backgroundColor: '#43658b',
            //         }
            //     ]
            // },
            options: {
                scales: {
                    xAxes: [{
                        stacked: true
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }
        };
        var ctx2 = document.getElementById('chart2');
        myChart2 = new Chart(ctx2, options2);

        var options3 = {
            type: 'bar',
            // data: {
            //     labels: state.weeks_xaxis,
            //     datasets: [{
            //             label: 'detractor',
            //             // data: data_detractor_SubcriberLevelCei,
            //             backgroundColor: '#F44336',
            //         },
            //         {
            //             label: 'passive',
            //             // data: data_passive_SubcriberLevelCei,
            //             backgroundColor: '#28df99',
            //         },
            //         {
            //             label: 'promoter',
            //             // data: data_promoter_SubcriberLevelCei,
            //             backgroundColor: '#43658b',
            //         }
            //     ]
            // },
            options: {
                scales: {
                    xAxes: [{
                        stacked: true
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }
        };
        var ctx3 = document.getElementById('chart3');
        myChart3 = new Chart(ctx3, options3);
        // bar
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
    $('#sidebar li').click(function() {
        if ($('#sidebar').hasClass("active")) {
            $('#sidebar').removeClass("active");
            $(".togname").show();
        }
    });
    $(document).ready(function() {
        get_app_name();
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

    function get_app_name() {
        var baseurl = '<?php echo base_url() ?>';
        var date = new Date();
        date = moment(date).add(-1, 'day').format("yyyy-MM-DD");
        $.ajax({
            url: baseurl + 'Dashboard/top10app',
            method: 'post',
            data: {
                date: date
            },
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                var appname = [];
                var get_icon = [];
                var traffic = [];
                var i;
                if (len > 0) {
                    // Read values
                    for (i = 0; i < 10; i++) {
                        // $('#app_name_1,#get_icon_1,#payload_value_1,#app_name_2,#get_icon_2,#payload_value_2').text('');
                        appname[i] = response[i].app_name;
                        traffic[i] = parseFloat(response[i].total_traffic_gb).toFixed(2);
                        if (appname[i] == 'YouTube') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/youtube.png" width="70" height="70"/>';
                        } else if (appname[i] == 'TikTok') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/tiktok.png" width="70" height="70"/>';
                        } else if (appname[i] == 'GooglePlay') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/google_play.png" width="70" height="70"/>';
                        } else if (appname[i] == 'Facebook') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/facebook.png" width="70" height="70"/>';
                        } else if (appname[i] == 'WhatsApp') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/whatsapp.png" width="70" height="70"/>';
                        } else if (appname[i] == 'Instagram') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/instagram.png" width="70" height="70"/>';
                        } else if (appname[i] == 'MobileLegends') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/mobilelegend.png" width="70" height="70"/>';
                        } else if (appname[i] == 'Google_Common') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/google.png" width="70" height="70"/>';
                        } else if (appname[i] == 'YouTube_Go') {
                            get_icon[i] = '<img src="<?php echo base_url(); ?>assets/img/logo/youtube.png" width="70" height="70"/>';
                        } else {
                            get_icon[i] = '<i class="fas fa-globe fa-fw"></i>';
                        }
                        var b = i + 1
                        $('#appname' + b).text(appname[i]);
                        // console.log("#app_name_" + b);
                        $('#geticon' + b).html(get_icon[i]);
                        $('#payloadvalue' + b).text(traffic[i]);
                    }
                    // // var output = appname[i];
                    // // console.log(output)
                    // $('#app_name_1').text(appname[i]);
                    // $('#get_icon_1').html(get_icon[i]);
                    // $('#payload_value_1').text(traffic[i]);
                }
            }
        });

    }
</script>
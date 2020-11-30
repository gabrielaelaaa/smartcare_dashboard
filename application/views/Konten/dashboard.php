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
                                        <strong class="db">4G</strong>
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
                        <div class="col-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">3G</strong>
                                        <small id="netavail-3gsum" class="db text-muted">53.518
                                            Erlang</small>
                                    </div>
                                    <div class="col pl-0">
                                        <div id="netavail-3gicon">
                                            <i class="fas fa-question-circle float-right" style="font-size:40px;color:orange"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="netavail-3gpersen" class="db persen voiceerlang">0.28
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
                <div class="col-12 text-center">
                <small class="text-muted">All percentages compared to yesterday</small>
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
                                        <div class="col-12">
                                            <span class="mb-2">Site Cell</span>
                                            <!--begin::Chart-->
                                            <canvas id="chart" height="150"></canvas>
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
                    <div class="col-5 pr-0">
                        <div class="card p-4 mt-3 heightfull">
                            <h6 class="card-title" style="font-weight:600">Performance Check
                            </h6>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card p-4 mt-3 heightfull">
                            <h6 class="card-title" style="font-weight:600">MS Pool</h6>
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
            </div>
            <div class="col-4">
                <div class="card p-4 mt-3 heightfull">
                    <h6 class="card-title" style="font-weight:600">Top 10 App</h6>
                    <div class="row">

                        <div class="col">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id=" payload" data-toggle="tab" href="#payload" role="tab" aria-controls="payload" aria-selected="true">Payload</a>
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
    var base_url = "<?= base_url() ?>"
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
    } else if (nv_delta == 0) {
        $('#netavail-persen').css("color", "DarkOrange");
        $('#netavail-icon').html('<i class="fas fa-minus-circle float-right" style="font-size:40px;color:DarkOrange"></i>');
    } else {
        $('#netavail-persen').css("color", "forestgreen");
        $('#netavail-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
    }
    nv_nowweek = parseFloat(datanetavailability[datanetavailability.length - 1].threeg);
    nv_lastweek = parseFloat(datanetavailability[datanetavailability.length - 2].threeg);
    nv_delta = nv_nowweek - nv_lastweek;
    $('#netavail-3gpersen').text(nv_delta.toFixed(2) + " %");
    total = parseFloat(datanetavailability[datanetavailability.length - 1].threeg);
    $('#netavail-3gsum').text(nFormatter(total, 2) + " %");
    if (nv_delta < 0) {
        $('#netavail-3gpersen').css("color", "red");
        $('#netavail-3gicon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
    } else if (nv_delta == 0) {
        $('#netavail-3gpersen').css("color", "yellow");
        $('#netavail-3gicon').html('<i class="fas fa-minus-circle float-right" style="font-size:40px;color:red"></i>');
    } else {
        $('#netavail-3gpersen').css("color", "forestgreen");
        $('#netavail-3gicon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
    }
</script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.chart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.table.js"></script>
<script>
    $('#sidebar li').click(function() {
        if ($('#sidebar').hasClass("active")) {
            $('#sidebar').removeClass("active");
            $(".togname").show();
        }
    });
    var state = {
        seleted_region: "",
        weeks_xaxis: ""
    };
    var dataz = []
    var dump = []
    var weeks = []
    $(document).ready(function() {
        my_maps();
        get_app_name();


    });
    d3.csv(base_url + "assets/csv/site_cell_per_band_2020_w46.csv").then(function(data) {
        // console.log(data.length);
        data.forEach(function(item, index) {
            if (weeks.includes(item.week) == false) {
                weeks.push(item.week)
            }
        });
        weeks.forEach(function(item, index) {
            dump[item] = []
        });
        data.forEach(function(item, index) {
            dump[item.week][item.row_labels] = {
                count_of_gsm_nb_cell_active: item.count_of_gsm_nb_cell_active,
                count_of_umts_nb_cell_active: item.count_of_umts_nb_cell_active,
                count_of_lte_nb_cell_active: item.count_of_lte_nb_cell_active,
                count_of_site_id: item.count_of_site_id,
            }
        });
        
        console.log(dump)
    });
    d3.csv(base_url + "assets/csv/site_cell_per_band_2020_w46.csv").then(function(data) {
        // console.log(data.length);
        data.forEach(function(item, index) {
            if (weeks.includes(item.week) == false) {
                weeks.push(item.week)
            }
        });
        weeks.forEach(function(item, index) {
            dataz[item] = []
        });
        data.forEach(function(item, index) {
            dataz[item.week][item.row_labels] = {
                count_of_gsm_nb_cell_active: item.count_of_gsm_nb_cell_active,
                count_of_umts_nb_cell_active: item.count_of_umts_nb_cell_active,
                count_of_lte_nb_cell_active: item.count_of_lte_nb_cell_active,
                count_of_site_id: item.count_of_site_id,
            }
        });
        console.log(dataz)
        // let kalisumapa
        // dataz.forEach(function(item, index) {
            
        // })
        let options = {
            type: 'bar',
            data: {
                labels: weeks,
                datasets: [{
                        label: 'GSM',
                        data: [dataz["W46"]["Kalisumapa"].count_of_gsm_nb_cell_active],
                        backgroundColor: '#af2d2d',
                    },
                    {
                        label: 'UMTS',
                        data: [dataz["W46"]["Kalisumapa"].count_of_umts_nb_cell_active],
                        backgroundColor: '#f9813a',
                    },
                    {
                        label: 'LTE',
                        data: [dataz["W46"]["Kalisumapa"].count_of_lte_nb_cell_active],
                        backgroundColor: '#f1e189',
                    }, {
                        label: 'Site ID',
                        data: [dataz["W46"]["Kalisumapa"].count_of_site_id],
                        backgroundColor: '#cee397',
                    }
                ]
            },
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


        var ctx = document.getElementById('chart');

        myChart = new Chart(ctx, options);
    });


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
                reloadChart(state.region_selected)
            },
            onRegionOver: function(element, code, region) {
                state.region_selected = "0";
                if (code_EAST_JAVA_BALI_NUSRA.indexOf(code) !== -1) {
                    state.region_selected = "East Java & Bali Nusra";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_EAST_JAVA_BALI_NUSRA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_EAST_JAVA_BALI_NUSRA, colorRegion[0]));
                }
                if (code_CENTRAL_WEST_JAVA.indexOf(code) !== -1) {
                    state.region_selected = "Central & West Java";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_CENTRAL_WEST_JAVA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_CENTRAL_WEST_JAVA, colorRegion[1]));
                }
                if (code_JABODETABEK.indexOf(code) !== -1) {
                    state.region_selected = "Jabotabek";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_JABODETABEK, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_JABODETABEK, colorRegion[2]));
                }
                if (code_KALISUMAPA.indexOf(code) !== -1) {
                    state.region_selected = "Kalisumapa";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_KALISUMAPA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_KALISUMAPA, colorRegion[3]));
                }
                if (code_SUMATERA.indexOf(code) !== -1) {
                    state.region_selected = "Sumatera";
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_SUMATERA, colorSeleceted));
                } else {
                    $("#vmap").vectorMap("set", "colors", changeColorRegion(code_SUMATERA, colorRegion[4]));
                }
            },
            onLabelShow: function(event, label, code_kota) {
                if (code_EAST_JAVA_BALI_NUSRA.indexOf(code_kota) !== -1) {
                    label.html("EAST_JAVA_BALI_NUSRA");
                    return
                }
                if (code_CENTRAL_WEST_JAVA.indexOf(code_kota) !== -1) {
                    label.html("CENTRAL_WEST_JAVA");
                    return
                }
                if (code_JABODETABEK.indexOf(code_kota) !== -1) {
                    label.html("JABODETABEK");
                    return
                }
                if (code_KALISUMAPA.indexOf(code_kota) !== -1) {
                    label.html("KALISUMAPA");
                    return
                }
                if (code_SUMATERA.indexOf(code_kota) !== -1) {
                    label.html("SUMATERA");
                    return
                }
                event.preventDefault();


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

    function reloadChart(region) {
        console.log(region)
        console.log(dataz["W46"][region].count_of_gsm_nb_cell_active);
        let options = {
            type: 'bar',
            data: {
                labels: weeks,
                datasets: [{
                        label: 'GSM',
                        data: [dataz["W46"][region].count_of_gsm_nb_cell_active],
                        backgroundColor: '#af2d2d',
                    },
                    {
                        label: 'UMTS',
                        data: [dataz["W46"][region].count_of_umts_nb_cell_active],
                        backgroundColor: '#f9813a',
                    },
                    {
                        label: 'LTE',
                        data: [dataz["W46"][region].count_of_lte_nb_cell_active],
                        backgroundColor: '#f1e189',
                    }, {
                        label: 'Site ID',
                        data: [dataz["W46"][region].count_of_site_id],
                        backgroundColor: '#cee397',
                    }
                ]
            },
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


        var ctx = document.getElementById('chart');

        myChart = new Chart(ctx, options);
    }

    function changeColorRegion(region, color) {
        let obj_new = {};
        region.forEach(element => {
            obj_new[element] = color;
        });
        return obj_new;
    }

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
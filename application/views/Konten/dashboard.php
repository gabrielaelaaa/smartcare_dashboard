
<!-- Content Here -->
<!-- <span class='judul'>Dashboard Home</span> -->
<!-- <div class='contentwrap pt-2'> -->
<div class="content-wrapper">

    <div class="container-fluid">
        <div class="card p-4 pt-0">
            <h6 class="card-title" style="font-weight:600">Traffic Monitoring</h6>
            <span class="text-muted">October</span>
            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <span class="mb-2">Voice Traffic (Erlang)</span>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">Traffic Total</strong>
                                        <small id="voicetotal-sum" class="db text-muted">53.518
                                            Subs</small>
                                    </div>
                                    <div class="col pl-0">
                                        <div id="voicetotal-icon">

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
                <div class="col-md-6 col-lg-4">
                    <span class="mb-2">VLR Subscriber</span>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">Register</strong>
                                        <small id="vlrregister-sum" class="db text-muted">53.518
                                            Subs</small>
                                    </div>
                                    <div class="col pl-0">
                                        <div id="vlrregister-icon"><i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="vlrregister-persen" class="db persen vlrsubs">0.28
                                            %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class='custom1'>
                                <div class="row">
                                    <div class="col pr-0">
                                        <strong class="db">Attach</strong>
                                        <small id="vlrattach-sum" class="db text-muted">-43.518
                                            Subs</small>

                                    </div>
                                    <div class="col pl-0">
                                        <div id="vlrattach-icon"><i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="vlrattach-persen" class="db persen vlrattach" style="color:forestgreen">-0.18 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="lineChart2" height="180"></canvas>
                </div>
                <div class="col-md-12 col-lg-4">
                    <span class="mb-2">National Voice</span>
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
                    <canvas id="lineChart3" height="180"></canvas>
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
                    <h6 class="card-title" style="font-weight:600">OTT App</h6>
                    <div class="row">

                        <div class="col">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="2g-tab" data-toggle="tab" href="#twog" role="tab" aria-controls="twog" aria-selected="false">2G</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="3g-tab" data-toggle="tab" href="#threeg" role="tab" aria-controls="threeg" aria-selected="false">3G</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="4g-tab" data-toggle="tab" href="#fourg" role="tab" aria-controls="fourg" aria-selected="false">4G</a>
                                </li>
                            </ul>
                            <div class="tab-content p-0" id="myTabContent">
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <ul class="list-group">

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
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

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-line fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Line
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
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

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-twitter fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Twitter
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>3,3%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-whatsapp fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Whatsapp
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span>9,3%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span style="color:red">-1,1%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw" style="color:red"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span style="color:red">-1,1%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw" style="color:red"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span style="color:red">-1,1%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw" style="color:red"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span style="color:red">-1,1%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw" style="color:red"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span style="color:red">-1,1%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw" style="color:red"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-parent text-center">
                                                            <i class="fab fa-youtube fa-fw"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-7 ottapp-left-info">
                                                                Youtube
                                                                <p><small>83,667 GB / 85,796
                                                                        GB</small>
                                                                </p>
                                                            </div>
                                                            <div class="col-5 ottapp-right-info">
                                                                <span style="color:red">-1,1%</span>
                                                                <div class="float-right"><i class="fas fa-angle-up fa-fw" style="color:red"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="twog" role="tabpanel" aria-labelledby="2g-tab">
                                    2G
                                </div>
                                <div class="tab-pane fade" id="threeg" role="tabpanel" aria-labelledby="3g-tab">
                                    3G
                                </div>
                                <div class="tab-pane fade" id="fourg" role="tabpanel" aria-labelledby="4g-tab">4G</div>
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

<?php $this->view('template/_jsresource'); ?>
<!-- Own Javascript Here -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.chart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dashboard.table.js"></script>
<script>
    d3
  .csv("<?= base_url();?>Core_KQI_daily_tot_20201028.csv")
  .then(voiceerlang);
  d3
  .csv("<?= base_url();?>Core_KQI_daily_tot_20201028.csv")
  .then(vlrsubscriber);
  $(document).ready(function(){
    d3.csv("<?= base_url();?>Core_KQI_daily_tot_20201028.csv").then(function(data) {
        // console.log(data[0]);
        lastweek = data[data.length-2]['VLR Subscriber Register'];
        nowweek = data[data.length-1]['VLR Subscriber Register'];
        percentage = nowweek/lastweek*100;
        increase = percentage-100;
        console.log(increase.toFixed(2) + "%");
        $('#vlrregister-persen').text(increase.toFixed(2) + " %");
        total = parseFloat(data[data.length-1]['VLR Subscriber Register']);
        $('#vlrregister-sum').text(nFormatter(total,2) + " subs")
        if(increase<0) {
            $('#vlrregister-persen').css("color", "red");
            $('#vlrregister-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
        } else {
            $('#vlrregister-persen').css("color", "forestgreen");
            $('#vlrregister-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
        }
        lastweek = data[data.length-2]['VLR Subscriber Attach'];
        nowweek = data[data.length-1]['VLR Subscriber Attach'];
        percentage = nowweek/lastweek*100;
        increase = percentage-100;
        $('#vlrattach-persen').text(increase.toFixed(2) + " %");
        total = parseFloat(data[data.length-1]['VLR Subscriber Attach']);
        $('#vlrattach-sum').text(nFormatter(total,2) + " subs")
        if(increase<0) {
            $('#vlrattach-persen').css("color", "red");
            $('#vlrattach-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
        } else {
            $('#vlrattach-persen').css("color", "forestgreen");
            $('#vlrattach-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
        }
        lastweek = data[data.length-2]['Voice (Erlang)'];
        nowweek = data[data.length-1]['Voice (Erlang)'];
        percentage = (nowweek/lastweek*100)-100;
        $('#voicetotal-persen').text(percentage.toFixed(2) + " %");
        total = parseFloat(data[data.length-1]['Voice (Erlang)']);
        $('#voicetotal-sum').text(nFormatter(total,2) + " subs")
        if(percentage<0) {
            $('#voicetotal-persen').css("color", "red");
            $('#voicetotal-icon').html('<i class="fas fa-chevron-circle-down float-right" style="font-size:40px;color:red"></i>');
        } else {
            $('#voicetotal-persen').css("color", "forestgreen");
            $('#voicetotal-icon').html(`
            <i class="fas fa-chevron-circle-up float-right" style="font-size:40px;color:forestgreen"></i>
            `);
        }
      });
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

<?php $this->view('template/_head'); ?>
<?php $this->view('template/_sidebar'); ?>
<?php $this->view('template/_navbar'); ?>
<!-- Content Here -->
<span class='judul'>Special Area</span>
                        <div class='contentwrap pt-2'>

                            <div class="container-fluid">
                                <div class="card p-4 pt-0">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <select class="browser-default custom-select">
                                                        <option selected>VIP Monitoring</option>
                                                        <option value="1">Daily</option>
                                                    </select>
                                                </div>
                                                <div class="form-group ml-sm-3 mb-2">
                                                    <select class="browser-default custom-select">
                                                        <option selected>4G</option>
                                                        <option value="1">Daily</option>
                                                    </select>
                                                </div>
                                                <div class="form-group ml-sm-3 mb-2">
                                                    <select class="browser-default custom-select">
                                                        <option selected>Hourly</option>
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
                                        <div class="col-12">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Category</th>
                                                        <th rowspan="2">Date Time</th>
                                                        <th colspan="6" class="text-center">KPI</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Payload GB</th>
                                                        <th>ConnectedUser</th>
                                                        <th>Availability %</th>
                                                        <th>SSSR %</th>
                                                        <th>ERAB Drop %</th>
                                                        <th>DL PRB %</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>AIRPORT</td>
                                                        <td>2020-03-15 21.00</td>
                                                        <td>336.38</td>
                                                        <td>6669</td>
                                                        <td>90%</td>
                                                        <td>100%</td>
                                                        <td>87%</td>
                                                        <td>99%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php $this->view('template/_jsresource'); ?>
<!-- Own Javascript Here -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/specialarea.chart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/specialarea.table.js"></script>
<script>
        $("#inputDate").datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        }).datepicker("update", "02/11/2020");

        $('#sidebar li').click(function () {
            if ($('#sidebar').hasClass("active")) {
                $('#sidebar').removeClass("active");
                $(".togname").show();
            }
        });
        $(document).ready(function () {
            if (!$("nav").hasClass("active")) {
                $(".togname").show();
            } else {
                $(".togname").hide();
            }
            $("#sidebarCollapse").on("click", function () {
                $("#sidebar").toggleClass("active");
                if (!$("nav").hasClass("active")) {
                    $(".togname").show();
                } else {
                    $(".togname").hide();
                }
            });
            $("#sidebarCollapse2").on("click", function () {
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
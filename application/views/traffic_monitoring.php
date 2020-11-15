<?php $this->view('template/_head'); ?>
<?php $this->view('template/_sidebar'); ?>
<?php $this->view('template/_navbar'); ?>
<!-- Content Here -->


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

        jQuery(document).ready(function () {
            jQuery('#vmap').vectorMap({
                map: 'indonesia_id',
                backgroundColor: '#fff',
                color: '#3a2e9a',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                selectedColor: null,
                onRegionClick: function (event, code, region) {
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
                onRegionClick: function (event, code, region) {
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
                onRegionClick: function (event, code, region) {
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
                onRegionClick: function (event, code, region) {
                    event.preventDefault();
                }
            });
        });
        $('#sidebar li').click(function(){
            if($('#sidebar').hasClass("active")) {
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
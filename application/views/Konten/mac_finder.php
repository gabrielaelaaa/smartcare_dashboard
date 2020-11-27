<!-- Content Here -->
<!-- <span class='judul'>Dashboard Home</span> -->
<!-- <div class='contentwrap pt-2'> -->
<div class="content-wrapper">

    <div class="container-fluid">
        <div class="card p-4 pt-0">
            <h6 class="card-title" style="font-weight:600">Mac Address Finder</h6>
            <div id="macfinder">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="ran-tab" data-toggle="tab" href="#ran" role="tab" aria-controls="ran" aria-selected="true">RAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="microwave-tab" data-toggle="tab" href="#microwave" role="tab" aria-controls="microwave" aria-selected="false">Microwave</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content p-0" id="myTabContent">
                <div class="tab-pane fade show active" id="ran" role="tabpanel" aria-labelledby="ran">
                    <div class="mt-3"></div>
                    <table id="ranmactable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Vendor
                                </th>
                                <th class="th-sm">NE
                                </th>
                                <th class="th-sm">Vlan ID
                                </th>
                                <th class="th-sm">Vlan Port
                                </th>
                                <th class="th-sm">IP/Mask
                                </th>
                                <th class="th-sm">Next Hop
                                </th>
                                <th class="th-sm">Mask
                                </th>
                                <th class="th-sm">Mac Address
                                </th>
                                <th class="th-sm">Label
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                </div>
                <div class="tab-pane fade" id="microwave" role="tabpanel" aria-labelledby="microwave">
                    <div class="mt-3"></div>
                    <table id="microwavemactable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Vendor
                                </th>
                                <th class="th-sm">IP Address
                                </th>
                                <th class="th-sm">NE
                                </th>
                                <th class="th-sm">Slot Port
                                </th>
                                <th class="th-sm">Mac Address
                                </th>
                                <th class="th-sm">Vlan
                                </th>
                                <th class="th-sm">Interface
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->view('template/_jsresource'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<!-- Own Javascript Here -->
<script>
    $(document).ready(function(e) {
        var base_url = "<?php echo base_url(); ?>"; // You can use full url here but I prefer like this
        $('#ranmactable').DataTable({
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "pageLength": 10,
            "serverSide": true,
            "order": [
                [0, "asc"]
            ],
            "ajax": {
                url: base_url + 'MacFinder/showran',
                type: 'POST'
            },
        }); // End of DataTable
        $('#microwavemactable').DataTable({
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "pageLength": 10,
            "serverSide": true,
            "order": [
                [0, "asc"]
            ],
            "ajax": {
                url: base_url + 'MacFinder/showmicrowave',
                type: 'POST'
            },
        }); // End of DataTable
    }); // End Document Ready Function
</script>
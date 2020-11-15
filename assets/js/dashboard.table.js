$(document).ready(function () {
    // Top 4 Roaming Inbound
    $('#inbound').DataTable({
        "searching": false,
        "paging": false,
        "bInfo": false
    });
    $('.dataTables_length').addClass('bs-select');

    // Top 4 Roaming Outbound
    $('#outbound').DataTable({
        "searching": false,
        "paging": false,
        "bInfo": false
    });
    $('.dataTables_length').addClass('bs-select');
    
    // MS Pool
    $('#mspool').DataTable({
        "searching": false,
        "paging": false,
        "bInfo": false
    });
    $('.dataTables_length').addClass('bs-select');

});
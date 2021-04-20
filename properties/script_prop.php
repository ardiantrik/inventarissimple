<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="resource/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="resource/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="resource/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="resource/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="resource/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="resource/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="resource/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="resource/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="resource/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="resource/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="resource/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="resource/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="resource/plugins/jszip/jszip.min.js"></script>
<script src="resource/plugins/pdfmake/pdfmake.min.js"></script>
<script src="resource/plugins/pdfmake/vfs_fonts.js"></script>
<script src="resource/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="resource/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="resource/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Toastr -->
<script src="resource/plugins/toastr/toastr.min.js"></script>
<!-- Page specific script -->
<script>
    function cekPass() {
        var x = document.getElementById("passInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    $(document).ready(function() {
        // $('#tabelskp').DataTable();
        $('.select2').select2();
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
        $("#alltable").DataTable({
            // "dom": '<"top"lf>rt<"bottom"ip><"clear">',
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            // "scrollY": 200,
            "scrollX": true,
            "scroller": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "language": {
                "search": "Cari:"
            },
            "oLanguage": {
                "sZeroRecords": "Tidak ada data",
                "sEmptyTable": "Tidak ada data",
                "sInfo": "Menampilkan total _TOTAL_ data (_START_ s/d _END_)",
                "sInfoFiltered": " - disaring dari _MAX_ data",
                "sInfoEmpty": "Tidak ada data"


            },
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-download"></i>&nbsp;Download Excel',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                }]
            }).buttons().container().appendTo('#alltable_wrapper .col-md-6:eq(0)');
            $("#userstable").DataTable({
            // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            "pageLength": 3,
            "scrollX": true,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "search": "Cari:"
            },
            "oLanguage": {
                "sZeroRecords": "Tidak ada data",
                "sEmptyTable": "Tidak ada data",
                "sInfo": "Menampilkan total _TOTAL_ data (_START_ s/d _END_)",
                "sInfoFiltered": " - disaring dari _MAX_ data",
                "sInfoEmpty": "Tidak ada data"
            }
        });
    } );
        
    


</script>
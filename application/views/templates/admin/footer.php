<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2021 All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Aglonema</b>
        </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin/js/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/admin/js/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/admin/js/Chart.min.js') ?>"></script>

<!-- JQVMap -->



<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/admin/js/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/admin/js/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/admin/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/admin/js/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin/js/jquery.overlayScrollbars.min.js') ?>"></script>

<!-- Datatables Online -->
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/js/adminlte.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/js/demo.js') ?>"></script>

<script src="<?= base_url('assets/admin/js/script.js'); ?>"></script>

<script type="text/javascript">
    //Button Export Data Tanaman Menu
    $(document).ready(function() {
        $('#data-users').DataTable({
            dom: 'lfrtip',
            autoWidth: true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            buttons: [{
                    className: 'btn-danger btn-round btn-sm mr-2',
                    extend: 'pdfHtml5',
                    text: 'Cetak (PDF) <i class="fa fa-file-pdf-o"></i>',
                    exportOptions: {
                        columns: [0, 1, 2, 4, 5, 6, 7, 8, 9],
                    },
                    title: 'Data Tanaman'
                },
                {
                    className: 'btn-success btn-round btn-sm mr-2',
                    extend: 'excelHtml5',
                    text: 'Cetak (Excel) <i class="fa fa-file-excel-o"></i>',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                    },
                    title: 'Data Tanaman'
                }
            ],
            select: {
                style: "multi"
            }
        });
    });
</script>
</body>

</html>
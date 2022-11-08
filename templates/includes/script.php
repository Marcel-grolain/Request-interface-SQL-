<?php
    function data_script()
    {
?>
        <!-- JS Files -->
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link href="assets/css/style.swal.css" rel="stylesheet">
        <script src="assets/js/swalalerte/swalalerte.js" ></script>

        <script>
            $(document).ready(function () {
                $('#datatable').DataTable();
            });
        </script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
</html>

<?php
    }
?>
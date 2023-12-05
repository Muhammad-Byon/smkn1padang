<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMKN 1 PADANG</title>
    <link rel="shortcut icon" type="image/png" href="/smk1padang.ico">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('BackEnd/css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">

    <!-- navbar -->
    <?= $this->include('BackEnd/Layout/navbar'); ?>

    <!-- sidebar -->
    <div id="layoutSidenav">

        <?= $this->include('BackEnd/Layout/sidebar'); ?>

        <!-- content -->
        <?= $this->renderSection('content'); ?>

        <!-- footer -->
        <?= $this->include('BackEnd/Layout/footer'); ?>

    </div>

    <!-- Script dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('BackEnd/js/scripts.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('BackEnd/assets/demo/chart-area-demo.js') ?>"></script>
    <script src="<?php echo base_url('BackEnd/assets/demo/chart-bar-demo.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('BackEnd/js/datatables-simple-demo.js') ?>"></script>

    <!-- SweetAlert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
    <!-- Skrip untuk menampilkan SweetAlert dari data sesi -->
    <script>
        <?php if (session('alert')) : ?>
            var alertData = <?= json_encode(session('alert')) ?>;
            swal(alertData.title, alertData.text, alertData.type);
        <?php endif; ?>
    </script>


</body>

</html>
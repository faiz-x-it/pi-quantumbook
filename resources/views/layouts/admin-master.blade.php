<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin | PT Kuantum Buku Sejahtera</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/themes/images/ico-quantum-book.png" type="image/x-icon">
    <link rel="icon" href="/themes/images/ico-quantum-book.png" type="image/x-icon">

    <!-- Plugins css -->
    
    <link href="/assets/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/backend/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/backend/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template-->
    <link href="{{asset('/')}}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/')}}admin/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Data Table -->
    <link href="{{asset('/')}}admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">

</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.includes.admin-sidebar')
    <!-- End of Sidebar -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Topbar -->
            @include('layouts.includes.admin-topbar')
            <!-- End of Topbar -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">
                     <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            
        </div>
    </div><!-- /.container-fluid -->
</section>

            <!-- Begin Page Content -->
            @yield('content')
        </div><!-- container fluid -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">
    © 2022 PT. Vokasi Indonesia Sejahtera
</footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="/assets/backend/assets/js/jquery.min.js"></script>
<script src="/assets/backend/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/backend/assets/js/modernizr.min.js"></script>
<script src="/assets/backend/assets/js/detect.js"></script>
<script src="/assets/backend/assets/js/fastclick.js"></script>
<script src="/assets/backend/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/backend/assets/js/jquery.blockUI.js"></script>
<script src="/assets/backend/assets/js/waves.js"></script>
<script src="/assets/backend/assets/js/jquery.nicescroll.js"></script>
<script src="/assets/backend/assets/js/jquery.scrollTo.min.js"></script>

<!-- Plugins js -->

<!-- App js -->
<script src="/assets/backend/assets/js/app.js"></script>

</body>

</html>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('/')}}admin/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/')}}admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/')}}admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('/')}}admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/')}}admin/js/demo/chart-area-demo.js"></script>
<script src="{{asset('/')}}admin/js/demo/chart-pie-demo.js"></script>
<!-- Page level plugins -->
<script src="{{asset('/')}}admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/')}}admin/js/demo/datatables-demo.js"></script>
@yield('script')
<script>
    $('#year').text(new Date().getFullYear())
</script>

</body>

</html>


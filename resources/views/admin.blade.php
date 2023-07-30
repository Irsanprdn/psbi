<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/compro/img/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('assets') }}/admin/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets') }}/admin/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('section.sidebar')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Admin Cengkareng</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="container-fluid">
                <div class="div-scroll">
                    @yield('content')
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Recent blogss -->
            <!-- ============================================================== -->
        </div>
    </div>


    <script src="{{ asset('assets') }}/admin/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets') }}/admin/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/admin/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets') }}/admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets') }}/admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets') }}/admin/js/custom.js"></script>

    <script src="{{ asset('assets') }}/admin/plugins/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets') }}/admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('assets') }}/admin/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
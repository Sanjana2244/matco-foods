<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/backend-assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/datatables/media/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/selectize/dist/css/selectize.default.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/photoswipe/dist/photoswipe.css" />
    <link rel="stylesheet" href="/backend-assets/vendors/photoswipe/dist/default-skin/default-skin.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css" />
    <link href="/backend-assets/css/ei-icon.css" rel="stylesheet">
    <link href="/backend-assets/css/themify-icons.css" rel="stylesheet">
    <link href="/backend-assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/backend-assets/css/animate.min.css" rel="stylesheet">
    <link href="/backend-assets/css/app.css" rel="stylesheet">

    @yield('afterStyles')
</head>

<body>
    <div class="app">
        <div class="layout">
            @include('admin.layouts.inc.sidebar')

            <!-- Page Container START -->
            <div class="page-container">
                @include('admin.layouts.inc.header')

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        @include('admin.layouts.inc.alert')
                        @yield('content')
                    </div>
                </div>
                <!-- Content Wrapper END -->

                @include('admin.layouts.inc.footer')
            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="/backend-assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/backend-assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="/backend-assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/backend-assets/vendors/PACE/pace.min.js"></script>
    <script src="/backend-assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="/backend-assets/vendors/datatables/media/js/jquery.dataTables.js"></script>

    <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>

    <script src="/backend-assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/backend-assets/vendors/selectize/dist/js/standalone/selectize.min.js"></script>

    <script src="/backend-assets/vendors/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="/backend-assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="/backend-assets/vendors/photoswipe/dist/photoswipe.js"></script>
    <script src="/backend-assets/vendors/photoswipe/dist/photoswipe-ui-default.min.js"></script>
    <script src="/backend-assets/js/extras/gallery.js"></script>
    <script src="/backend-assets/js/app.js"></script>

    @yield('afterScripts')

</body>

</html>

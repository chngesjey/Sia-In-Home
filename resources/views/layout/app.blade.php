<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <!-- Datatable -->
        <link rel="stylesheet" href="{{ asset('asset/datatable/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/datatable/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/datatable/buttons.bootstrap4.min.css') }}">

        <!-- iziToast Alert -->
        <link rel="stylesheet" href="{{ asset('asset/izitoast/iziToast.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('asset/css/adminlte.min.css') }}">
</head>


<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        @include('layout.navbar')

        @include('layout.sidebar')


        <div class="content-wrapper">

            @yield('content')

            <div class="content-wrapper">

                <!-- <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Blank Page</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            Start creating your amazing application!
                        </div>

                        <div class="card-footer">
                            Footer
                        </div>
                        
                    </div>

                </section> -->

            </div>

        </div>

        @include('layout.footer')

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    
    <script src="{{asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('asset/js/adminlte.min.js?v=3.2.0') }}"></script>
    
    <!-- Datatable -->
    <script src="{{ asset('asset/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('asset/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/datatable/responsive.bootstrap4.min.js') }}"></script>

    <!-- sweetalert -->
    <script src="{{ asset('asset/alert/sweetalert.min.js') }}"></script>

    <!-- iziToast Alert JSON -->
    <script src="{{ asset('asset/izitoast/iziToast.min.js') }}"></script>

    @stack('script')

</body>

</html>

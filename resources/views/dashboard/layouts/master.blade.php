
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

        <!-- morris css -->
        <link rel="stylesheet" href="{{url('../plugins/morris/morris.css')}}">

        <!-- App css -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    </head>


    <body>

        <!-- Start Loader -->
    @extends('dashboard.layouts.preloader')
        <!-- End Loader -->


        <!-- Start header -->
    @extends('dashboard.layouts.header')
        <!-- End header -->


        <!-- Start Content -->
    @yield('content')
        <!-- End Content -->


        <!-- Start Footer -->
     @extends('dashboard.layouts.footer')
        <!-- End Footer -->

        
        <!-- Start jQuery  -->
    @extends('dashboard.layouts.jquery')
        <!-- End jQuery  -->



    </body>
</html>
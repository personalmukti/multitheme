<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Theme 1 -{{ config('app.name') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('t1/css/bootstrap.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('t1/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('t1/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('t1/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('t1/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('t1/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    @yield('content')

    <!-- Javascript files-->
    <script src="{{ asset('t1/js/jquery.min.js') }}"></script>
    <script src="{{ asset('t1/js/popper.min.js') }}"></script>
    <script src="{{ asset('t1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('t1/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('t1/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('t1/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('t1/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('t1/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/starlight.css') }}">
</head>
<body>
@yield('admin')


@include('admin.body.left_panel')
@include('admin.body.header')

@include('admin.body.right_panel')


<script src="{{asset('backend/assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('backend/assets/lib/popper.js/popper.js')}}"></script>
<script src="{{asset('backend/assets/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('backend/assets/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('backend/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('backend/assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('backend/assets/lib/d3/d3.js')}}"></script>
<script src="{{asset('backend/assets/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('backend/assets/lib/chart.js/Chart.js')}}"></script>
<script src="{{asset('backend/assets/lib/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/assets/lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('backend/assets/lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('backend/assets/lib/flot-spline/jquery.flot.spline.js')}}"></script>

<script src="{{asset('backend/assets/js/starlight.js')}}"></script>
<script src="{{asset('backend/assets/js/ResizeSensor.js')}}"></script>
<script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
</body>
</html>

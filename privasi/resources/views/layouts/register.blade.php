<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="assets-dash/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets-dash/plugins/dataTables/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets-dash/fonts/cryptocoins.css" rel="stylesheet">
		<!-- Simple line icons -->
		<link href="assets-dash/css/simple-line-icons.css" rel="stylesheet">
    <!-- Font awesome icons -->
    <link href="assets-dash/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets-dash/css/font-awesome-animation.min.css" rel="stylesheet">
		
</head>
<body>
        @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

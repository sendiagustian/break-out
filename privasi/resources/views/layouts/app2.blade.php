<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="assets-dash/logo/bo-logo.png" type="image/ico" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Break-out</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   

</head>
<body>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets-dash/js/jquery.min.js') }}"></script>


</body>
</html>

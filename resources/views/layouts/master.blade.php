<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="shortcut icon" type="image/png" href="{!! asset('img/favicon.png') !!}"/ Most google driveon van-->
    <link rel="shortcut icon" type="image/png" href="http://chicagovalentine.pe.hu/igm_to_1020/favicon.png"/>

    <title>@yield('title')</title>

    <!-- Fonts -->
    <!-- ORIGINAL link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:100,600" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <!-- Styles -->
    @yield('stylesheet')
</head>
<body>
@yield('content')
<script>
    var time = new Date().getTime();
    $(document.body).bind("mousemove keypress", function(e) {
        time = new Date().getTime();
    });

    function refresh() {
        if(new Date().getTime() - time >= 300000)//5 minutes
            window.location.reload(true);
        else
            setTimeout(refresh, 60000);
    }

    setTimeout(refresh, 60000);
</script>
</body>
</html>

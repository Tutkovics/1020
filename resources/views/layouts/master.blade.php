<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="shortcut icon" type="image/png" href="{!! asset('img/favicon.png') !!}"/ Most google driveon van-->
    <link rel="shortcut icon" type="image/png" href="https://drive.google.com/open?id=0B81ToBi1Or-jR0ZJTC04dXR2aFE"/>

    <title>@yield('title')</title>

    <!-- Fonts -->
    <!-- ORIGINAL link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:100,600" rel="stylesheet">

    <!-- Styles -->
    @yield('stylesheet')

</head>
<body>

@yield('content')

</body>
</html>

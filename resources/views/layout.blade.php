<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Appollo</title>

    
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <link href="/css/sb-admin-2.css" rel="stylesheet">
    
    <!-- Custom CSS --> 
    <link href="/css/landing-page.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Poppins" rel="stylesheet">
    
    @yield('nav')
</head>
<body>
    @yield('acontent')


    @yield('content')


    @yield('jsFile')

    @yield('footer')
</body>
    
</html>
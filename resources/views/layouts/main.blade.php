<!DOCTYPE html>
<html lang="en">
    <head>
        <!--[ SEO Optimization ]-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contoh</title>

        <!--[ Linked Library Management ]-->
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,700,700i,900,900i' rel='stylesheet'/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/documentation.css">
        <link rel="stylesheet" href="css/concept.css">
        <link rel="stylesheet" href="css/post.css">
        <script src="js/icon.js" type="text/javascript"></script>
    </head>
<body>
    @include('layouts.header')\
    <div class="header-height"></div>

    <div class="container">
        @yield('container')
    </div>

    @include('layouts.footer')
    <!--[ Handle Script ]-->
    <script src="js/script.js"></script>
</body>
</html>

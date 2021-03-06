<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Competition Yuppie</title>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>

        <!-- CSS -->
        <link rel="stylesheet" href="/css/master.css">

    </head>
    <body>


        <div class="content">
            @yield('content')
        </div>


        <footer class="footer">
            @include('partials.footer')
        </footer>


    </body>
</html>

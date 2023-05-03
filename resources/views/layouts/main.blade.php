<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
    
        <title>Сайт новостей - @section('title') @show</title>    

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none; 
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .text-verticals {
            padding-top: 50px;
            padding-bottom: 150px;
        }

        .register-container {
            margin-top: 100px;
            margin-bottom: 30px;
        }

        .login-container {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .home-container, .email-container {
            margin-top: 130px;
            margin-bottom: 170px;
        }

        </style>

    </head>
    <body>

        <x-header></x-header>

        <main>
            @yield('content')
        </main>

        <x-footer></x-footer>


        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
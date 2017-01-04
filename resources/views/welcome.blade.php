<!DOCTYPE html>
<html>
    <head>
        <title>Laravel-Vue-App</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <style>
            body {
                padding-top: 50px;
            }
        </style>

    </head>
    <body>
    <div id="app">
        <v-nav></v-nav>

        <div class="container">

            <v-intro-panel></v-intro-panel>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

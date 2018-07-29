<!DOCTYPE html>
<html>
<head>
    <title>Laravel-Vue-App</title>
    <link rel="stylesheet" href="{{ mix('build/css/app.css') }}">
</head>
<body>
<div id="app">
    <v-nav></v-nav>
    <div class="container">
        <v-intro-panel></v-intro-panel>
    </div>
</div>

<script src="{{ mix('build/js/app.js') }}"></script>
</body>
</html>

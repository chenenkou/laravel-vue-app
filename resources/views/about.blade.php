<!DOCTYPE html>
<html>
<head>
    <title>Laravel-Vue-App</title>
    <link rel="stylesheet" href="{{ mix('build/css/app.css') }}">
</head>
<body>
<div id="app"></div>

<script>
    window.Laravel = {};
    Laravel.csrfToken = "{{ csrf_token() }}";
</script>
<script src="{{ mix('build/js/about.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Laravel-Vue-App</title>
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div id="app"></div>

<script>
    window.Laravel = {};
    Laravel.csrfToken = '{{ csrf_token() }}';
</script>
<script src="{{ asset('js/about.js') }}"></script>
</body>
</html>

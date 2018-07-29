@extends('layouts.app')

@section('content')
    <div id="app"></div>
@endsection

@section('appendScript')
    <script>
        window.Laravel = {};
        Laravel.csrfToken = "{{ csrf_token() }}";
    </script>
    <script src="{{ mix('build/js/about.js') }}"></script>
@endsection
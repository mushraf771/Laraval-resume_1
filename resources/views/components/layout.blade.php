<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{asset('css/style.css') }}" />
<link rel="stylesheet" href="{{asset('css/all.css') }}" />
        <title>{{ $title }}</title>
        
    </head>
    <body class="">

<div class="container-fluid ">

<div class="row">
    <div class="col-sm-2 ">
        @include('include.sidebar')
    </div>
    <div class="col-sm-10 ">
    {{ $content }}
    </div>
</div>
</div>


<script  src="{{asset('js/bootstrap.bundle.js') }}"></script>
<script  src="{{asset('js/all.js') }}"></script>
    </body>
</html>

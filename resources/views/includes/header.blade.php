<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="bg-body-pattern bg-scroll">
<header id="header" class="bg-black font-sans text-white h-20">
    <div class="container mx-auto flex flex-row">
        <div id="logo" class="flex-auto">
            <span class="web-symbol">S</span>
            <h3>Logo</h3>
        </div>
        <div class="flex-1">
            @section('header')
                es el encabezado
            @show
        </div>
        {{-- Navegación --}}
        @include('includes.nav')
        {{-- Navegación --}}
    </div>
</header>

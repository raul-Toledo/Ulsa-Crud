@extends('layouts.master')
@section('title', 'Quiero este valor')
{{-- Personalizo el header --}}
@section('header')
    <h1>Mi primer View con plantilla en Laravel</h1>
    @parent
@stop
{{-- Personalizo el Navbar --}}
@section('navbar')
    <h2>Menú de opciones</h2>
    @parent
@stop
{{-- Personalizo el Contenido --}}
@section('content')
    @parent
    <p>Es el contenido de mi página web</p>
@stop
{{-- Personalizo el Contenido --}}
@section('footer')
    @parent
    <p>{{date('Y')}}</p>
@stop

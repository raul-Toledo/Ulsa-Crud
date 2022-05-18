<?php use App\Http\Controllers\ControladorEjemp; ?>
@extends('layouts.master')
@section('title', 'Ejemplo de rutas')
{{-- Personalizo el header --}}
@section('header')
    <h1>Manejo de Parámetros con Rutas y With</h1>
    @parent
@stop
{{-- Personalizo el Navbar --}}
@section('navbar')
    <ul>
        <li><a href="{{action([ControladorEjemp::class, 'ejemplo'])}}">Action</a></li>
        <li><a href="{{action([ControladorEjemp::class, 'ejemploURL'],['edad'=>24,'nombre'=>'pepe','imc'=>58])}}">Action parametros</a></li>
        <li><a href="{{route('rutaWith')}}">Route</a></li>
    </ul>
@stop
{{-- Personalizo el Contenido --}}
@section('content')
    <p>Nombre: {{$nombre}}</p>
    <p>Edad: {{$edad}}</p>
    <p>IMC: {{$imc}}</p>
@stop
{{-- Personalizo el Contenido --}}
@section('footer')
    @parent
    <p>{{date('Y')}}</p>
@stop

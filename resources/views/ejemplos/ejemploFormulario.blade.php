<?php use App\Http\Controllers\ControladorEjemp; ?>
@extends('layouts.master')
@section('title', 'Ejemplo de rutas')
{{-- Personalizo el header --}}
@section('header')
    <h1>Envio de Formulario</h1>
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
    <form action="{{action([ControladorEjemp::class, 'imc'])}}" method="post">
        {{csrf_field()}}
        <label for = "edad">Edad</label>
        <input type = "text" name = "edad"/>
        <br>
        <label for = "nombre">Nombre</label>
        <input type = "text" name = "nombre"/>
        <br>
        <label for = "imc">Llave</label>
        <input type = "text" name="imc"/>
        <br>
        <input type = "submit" value = "Enviar">

    </form>
@stop
{{-- Personalizo el Contenido --}}
@section('footer')
    @parent
    <p>{{date('Y')}}</p>
@stop

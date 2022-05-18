<?php use App\Http\Controllers\ComicController;
?>
@if(isset($comic) && is_object($comic))
    <?php
        $nomComic = $comic->nomComic;
        $precio = $comic->precio;
        $created_at = $comic->created_at;
        $updated_at = $comic->updated_at;
        $id = $comic->idComic;
    ?>
@else
    <?php
        $nomComic = "";
        $precio = "";
        $created_at = "";
        $updated_at = "";
        $id = ""
    ?>
@endif
@extends('layouts.master')
@section('title', 'Detalle de Comics')
{{-- Personalizo el header --}}
@section('header')
    <h1>Detalle de Comics</h1>
    @parent
@stop
{{-- Personalizo el Navbar --}}
@section('navbar')
    <ul>
        <li><a href="{{action([ComicController::class,'create'])}}">Agregar Nuevo</a></li>
    </ul>
@stop
{{-- Personalizo el Contenido --}}
@section('content')
    <form class="w-full max-w-sm" action="{{isset($comic) ? action([ComicController::class,'update']) : action([ComicController::class,'store'])}}" method="post">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                {{csrf_field()}}
        <input type="hidden" name="id" value="{{$id}}">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for = "nombre">Nombre</label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type = "text" name = "nombre" value="{{$nomComic}}"/>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">

        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for = "precio">Precio</label>
            </div>
            <div class="md:w-2/3">
                <input class="md:w-2/3" type = "text" name = "precio" value="{{$precio}}"/>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for = "creado">Creado</label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type = "text" name="creado" value="{{$created_at}}"/>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"  for = "actualizado">Actualizado</label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type = "text" name="actualizado" value="{{$updated_at}}"/>
            </div>
        </div>
                <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
        <input class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type = "submit" value = "{{isset($comic) ? 'Actualizar' : 'Enviar'}}">
            </div>
            </div>
    </form>
@stop
{{-- Personalizo el Contenido --}}
@section('footer')
    @parent
    <p>{{date('Y')}}</p>
@stop

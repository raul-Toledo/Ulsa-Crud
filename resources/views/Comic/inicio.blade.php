<?php use App\Http\Controllers\ComicController;?>
@extends('layouts.master')
@section('title', 'Listado de Comics')
{{-- Personalizo el header --}}
@section('header')
    <h1>Listado de Comics</h1>
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
<table class="min-w-full table-auto">
    <caption>Listado de Comics</caption>
    <thead class="justify-between">
        <tr class="bg-gray-800">
            <th class="px-16 py-2"> <span class="text-gray-300">id</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Nombre</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Precio</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Creado</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Actualizado</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Ver</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Borrar</span>
            </th>
        </tr>
    </thead>
    <tbody class="bg-gray-200">
    @forelse($comics as $comic)
        <tr class="bg-white border-4 border-gray-200">
            <td class="px-16 py-2 flex flex-row items-center">{{$comic->idComic}}</td>
            <td>{{$comic->nomComic}}</td>
            <td>{{$comic->precio}}</td>
            <td>{{$comic->created_at}}</td>
            <td>{{$comic->updated_at}} fecha</td>
            <td><a href="{{action([ComicController::class,'show'],['id'=>$comic->idComic])}}">VER</a></td>
            <td><a href="{{action([ComicController::class,'destroy'],['id'=>$comic->idComic])}}">DEL</a></td>
        </tr>
    @empty
        <tr>
            <td>No data</td>
        </tr>
    @endforelse
    </tbody>
</table>
@stop
{{-- Personalizo el Contenido --}}
@section('footer')
    @parent
    <p>{{date('Y')}}</p>
@stop

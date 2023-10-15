@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenidos') }}
        </h2>

        
    </x-slot>

    <video autoplay loop muted plays-inline class="back-video" id="background-video" style="width: 50%; height: 50%; position: absolute; top: 55%; left: 41%; transform: translate(-50%, -50%);">
        <source src="{{ asset('welcome/vid/video2.mp4') }}" type="video/mp4">
    </video>

    <div class="card" style="width: 18rem; position: absolute; top: 40%; left: 70%;">
        <img class="card-img-top" src="{{ asset('welcome/img/logo3.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Gestiona todo tu comercio con este software!
            <br>
            Contacto: grupodevops@hotmail.com
          </p>
        </div>
      </div>
    
</x-app-layout>



@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

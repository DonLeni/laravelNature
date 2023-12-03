@extends('adminlte::page')

@section('title', 'Nature Beautiful')

@section('content_header')
    <h1>Nature Beautiful</h1>
    <p>Bienvenido a Nature, tu mejor opción en belleza.</p>
@stop

@section('content')
    <div class="background-images">
        <img src="{{ asset('vendor\adminlte\dist\img\Publicidad1.png') }}" alt="Image 1">
        <img src="{{ asset('vendor\adminlte\dist\img\Publicidad2.png') }}" alt="Image 2">
        <img src="{{ asset('vendor\adminlte\dist\img\Publicidad3.png') }}" alt="Image 3">
        <img src="{{ asset('vendor\adminlte\dist\img\Publicidad4.png') }}" alt="Image 4">
        <img src="{{ asset('vendor\adminlte\dist\img\Publicidad5.png') }}" alt="Image 5">
        <img src="{{ asset('vendor\adminlte\dist\img\Publicidad6.png') }}" alt="Image 6">
        
        <!-- Agrega más imágenes según sea necesario -->
    </div>

    <div class="content-wrapper">
        <!-- Contenido principal aquí -->
        <div class="content">
            <div class="container-fluid">
                <!-- Tu contenido específico de AdminLTE -->
                {{-- Ejemplo: --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>

.content-wrapper {
            background: none; /* Elimina el fondo predeterminado de AdminLTE */
        }

        /* Agrega estilos adicionales según sea necesario */
        .background-images {
            position: fixed;
            top: 10;
            left: 25;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .background-images img {
            position:inherit
            top: 0;
            left: 0;
            width: 25%;
            height: 25%;
            object-fit: cover;
         
        }

        .background-images img:first-child {
            opacity: 1; /* Muestra la primera imagen */
        }
    </style>
@stop
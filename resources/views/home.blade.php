<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Desarrollador de Software - Jose David') }}</div>

                <div class="card-body">
                    <h2>{{ __('¡Hola, soy Jose David!') }}</h2>
                    <p>{{ __('Bienvenido a mi página web personal.') }}</p>
                    <p>{{ __('Soy un apasionado desarrollador de software con experiencia en Laravel.') }}</p>
                    <p>{{ __('Aquí puedes encontrar información sobre mis proyectos y habilidades técnicas.') }}</p>

                    <!-- Tarjeta de información sobre Laravel -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Laravel</h5>
                            <p class="card-text">Laravel es un framework de desarrollo web PHP que sigue el modelo de arquitectura MVC (Modelo-Vista-Controlador). Es conocido por su elegante sintaxis y su facilidad de uso, lo que lo convierte en una opción popular para desarrollar aplicaciones web modernas y escalables.</p>
                            <a href="https://laravel.com" class="btn btn-primary">Más información</a>
                        </div>
                    </div>

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('images/messi1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('images/messi2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/messi3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

                    @if (session('status'))
                        <div class="alert alert-success mt-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mt-4">{{ __('¡Gracias por visitar mi sitio web!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

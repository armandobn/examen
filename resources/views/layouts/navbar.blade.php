@extends('layouts.plantilla')
@section('title', 'navbar')

@section('navbar') 


<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
          </li>
        </ul>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <span class="fas fa-user-circle fa-2x"></span>
                        <b>{{ auth()->user()->name }}</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('usuario.destroy')}}">
                        cerrar sesion
                    </a>
                </li>
            </ul>
            
            
        </div>
      </div>
    </div>
  </nav>

@endsection
@extends('layouts.plantilla')
@section('title','Registrar Usuario')
@section('container')
<head>
  <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body >
  <div class="container" id="container">
    <h1>&bull;Registrar &bull;</h1>
  </div>
  {{-- <div class="row text-center">
  <div class="col">
    
  </div>
</div> --}}
<div class="underline"></div>

<form action="{{route('usuario.store')}}" method="POST">
  @csrf
  <div class="row">
    <div class="col">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" value='{{ old('name') }}' placeholder="name">
        <label for="name">Nombre</label>
      </div>
    </div>
    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control" id="apePaterno" name="apePaterno"   value='{{ old('apePaterno') }}' placeholder="apePaterno">
        <label for="apePaterno">Apellido Paterno</label>
      </div>
    </div>
    @error('apePaterno')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control" id="apeMaterno" name="apeMaterno" value='{{ old('apeMaterno') }}' placeholder="apeMaterno">
        <label for="apeMaterno">Apellido Materno</label>
      </div>
    </div>
  </div>
  @error('apeMaterno')
        <br>
        <small>{{$message}}</small>
        <br>
  @enderror
  <div class="row">
    <div class="col">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" value='{{ old('email') }}' placeholder="name@example.com">
        <label for="email">Correo</label>
      </div>
    </div>
    @error('email')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    
    <div class="col">
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" value='{{ old('password') }}' placeholder="Password">
        <label for="password">Password</label>
      </div>
    </div>
  </div>
  @error('password')
  <br>
  <small>{{$message}}</small>
  <br>
@enderror
<div class="row">
  <div class="col">
    <button type="submit" class="btn btn-primary mt-3">Registrar</button>
  </div>
  <div class="col">
    <a href="{{route('usuario.index')}}" class="btn btn-primary mt-3">Regresar</a>
  </div>
</div>
  
  
</form>
<br>
</body>


@endsection

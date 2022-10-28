@extends('layouts.navbar')
@section('container')

<h1>Edit</h1>
<form action="{{route('update', ['empleado' => $empleado->id])}}" method="post">
    @method('PUT')
    @include('empleado.form')
    {{-- <select class="form-select" name="estatus" id="estatus">
        @foreach ($estatus as $estatu)
            <option value="{{ $estatu }}" {{ $estatu == $empleado->estatus ? 'selected' : '' }}>{{ $estatu }}</option>
        @endforeach
    </select> --}}
    <input type="submit" class="btn btn-primary" value="editar">
</form>
@endsection

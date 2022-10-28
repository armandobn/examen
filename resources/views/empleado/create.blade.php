@extends('layouts.navbar')

@section('container')
    <form action="{{route('store')}}" method="POST">
        @method('POST')
        @include('empleado.form')
        {{-- <select class="form-select" name="estatus" id="estatus">
            @foreach ($estatus as $estatu)
                <option value="{{ $estatu }}" >{{ $estatu }}</option>
            @endforeach
        </select> --}}
        
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
@endsection

@extends('layouts.navbar')


@section('container')
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{route('create')}}">
                Crear Empleado
            </a>
        </div>
    </div>
    <div class="table-responsive ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Puesto</th>
                    <th class="text-center">Salario diario</th>
                    <th class="text-center">Estatus</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">{{ $item->nombre }}</td>
                        <td class="text-center">{{ $item->apellidos }} </td>
                        <td class="text-center">{{ $item->correo }} </td>
                        <td class="text-center">{{ $item->puesto }} </td>
                        <td class="text-center">{{ $item->salario_diario }} </td>
                        <td class="text-center">{{ $item->estatus }} </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('salario-index', ['empleado' => $item->id]) }}">
                                Calculo Salario
                            </a>
                            <a class="btn btn-primary" href="{{ route('edit', ['empleado' => $item->id]) }}">
                                <span>Editar</span>
                            </a>
                            <form action="{{ route('delete', ['empleado' => $item->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="px-6 py-4">
            {{ $items->links() }}
        </div>
    @endsection

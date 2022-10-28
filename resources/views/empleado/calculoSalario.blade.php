@extends('layouts.navbar')
@section('container')
    <h2>Calculo Salario</h2>


    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input readonly type="text" class="form-control" id="nombre" name="nombre"
                    value=@if (isset($empleado->nombre)) {{ $empleado->nombre }} @endif>
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" readonly class="form-control" id="apellidos" name="apellidos"
                    value=@if (isset($empleado->apellidos)) {{ $empleado->apellidos }} @endif>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">correo</label>
                <input type="email" readonly class="form-control" id="correo" name="correo"
                    value=@if (isset($empleado->correo)) {{ $empleado->correo }} @endif>
            </div>

            <div class="mb-3">
                <label for="puesto" class="form-label">Puesto</label>
                <input type="text" readonly class="form-control" id="puesto" name="puesto"
                    value=@if (isset($empleado->salario_diario)) {{ $empleado->puesto }} @endif>
            </div>

            <div class="mb-3">
                <label for="salario_diario" class="form-label">Salario Diario</label>
                <input type="text" readonly class="form-control" id="salario_diario" name="salario_diario"
                    value=@if (isset($empleado->salario_diario)) {{ $empleado->salario_diario }} @endif>
            </div>
        </div>
    </div>

    <select class="form-select" name="salario" id="salario">
        <option value="">Seleecione una Opcion</option>
        <option value="semanal">Semanal</option>
        <option value="quincenal">Quicenal</option>
        <option value="mensual">Mensual</option>
    </select>

    <div class="mt-3" id="salario_total" name="salario_total">Cantidad: 0</div>
@endsection

@push('custom-scripts')
    <script src="{{ mix('js/caculoSalario.js') }}"></script>
@endpush

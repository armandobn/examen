@csrf

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"
        value=@if (isset($empleado->nombre)) {{ $empleado->nombre }} @endif>
</div>

<div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos"
        value=@if (isset($empleado->apellidos)) {{ $empleado->apellidos }} @endif>
</div>

<div class="mb-3">
    <label for="correo" class="form-label">correo</label>
    <input type="email" class="form-control" id="correo" name="correo"
        value=@if (isset($empleado->correo)) {{ $empleado->correo }} @endif>
</div>

<div class="mb-3">
    <label for="puesto" class="form-label">Puesto</label>
    <input type="text" class="form-control" id="puesto" name="puesto"
        value=@if (isset($empleado->salario_diario)) {{ $empleado->puesto }} @endif>
</div>

<div class="mb-3">
    <label for="salario_diario" class="form-label">Salario Diario</label>
    <input type="text" class="form-control" id="salario_diario" name="salario_diario"
        value=@if (isset($empleado->salario_diario)) {{ $empleado->salario_diario }} @endif>
</div>

{{-- <div class="mb-3">
    <label for="estatus" class="form-label">Estatus</label>
    <input type="text" class="form-control" id="estatus" name="estatus"
        value=@if (isset($empleado->estatus)) {{ $empleado->estatus }} @endif>
</div> --}}

<select class="form-select" name="estatus" id="estatus">
    @foreach ($estatus as $estatu)
        <option value="{{ $estatu }}" {{ $estatu == $empleado->estatus ? 'selected' : '' }}>{{ $estatu }}</option>
    @endforeach
</select>


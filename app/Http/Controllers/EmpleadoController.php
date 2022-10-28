<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //
    
    public function estatus(){
        $array = array("Activo", "Inactivo");
        return $array;
    }
    
    public function index()
    {

        $items = Empleado::paginate(3);

        return view(
            'empleado.index',
            compact("items")
        );
    }

    public function edit(Empleado $empleado)
    {

        $estatus = $this->estatus();
        return view(
            'empleado.edit',
            compact("empleado","estatus")
        );
    }

    public function create()
    {
        $empleado= new Empleado();
        $estatus = $this->estatus();
        return view(
            'empleado.create', compact('estatus','empleado')
        );
    }

    public function store(Request $request)
    {

        $item = new Empleado();
        $item->nombre = $request->nombre;
        $item->apellidos = $request->apellidos;
        $item->correo = $request->correo;
        $item->puesto = $request->puesto;
        $item->salario_diario = $request->salario_diario;
        $item->estatus = $request->estatus;
        $item->save();
        return redirect()
            ->route("index");
    }


    public function update(Request $request, Empleado $empleado)
    {

        $item = $empleado;
        $item->nombre = $request->nombre;
        $item->apellidos = $request->apellidos;
        $item->correo = $request->correo;
        $item->puesto = $request->puesto;
        $item->salario_diario = $request->salario_diario;
        $item->estatus = $request->estatus;
        $estatus = $this->estatus();
        return view(
            'empleado.edit',
            compact("empleado",'estatus')
        );
    }

    public function delete(Empleado $empleado)
    {

        $item = $empleado;
        $item->delete();
        return redirect()
            ->route("index");
    }
}

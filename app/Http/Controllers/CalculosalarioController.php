<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class CalculosalarioController extends Controller
{
    //
    
    
    public function index(Empleado $empleado)
    {

        return view(
            'empleado.calculoSalario',
            compact("empleado")
        );
    }
}

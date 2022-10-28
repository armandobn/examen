<?php

namespace Database\Seeders;

use App\Models\Empleado;
use App\Models\EmpleadosModel;
use Illuminate\Database\Seeder;


class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Empleado::factory(100)->create();
        
    }
}

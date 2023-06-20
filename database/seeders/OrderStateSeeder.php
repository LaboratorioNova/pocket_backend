<?php

namespace Database\Seeders;

use App\Models\OrderState;
use Illuminate\Database\Seeder;

class OrderStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states =[
            "Creado",
            "Aprobado",
            "Activo",
            "Completado",
            "Cancelado",
        ];

        foreach($states as $state){
            OrderState::create(["name" => $state]);
        }
    }
}

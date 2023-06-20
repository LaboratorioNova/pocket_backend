<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ["id" => 1, "name" => "Administrador"],
            ["id" => 2, "name" => "Flebotomista"],
            ["id" => 3, "name" => "Cliente"],
        ];


        foreach($roles as $role){
            Role::create($role);
        }

    }
}

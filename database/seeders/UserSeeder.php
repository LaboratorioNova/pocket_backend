<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Role;
use App\Models\User;
use App\Models\CustomerInfo;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        $now = Carbon::now();
        $faker = \Faker\Factory::create();
        
        $users = [
            /*[
                "Juan Alberto",
                "De Villas",
                "Cruz",
                "4774667655",
                "juda_alector@hotmail.com",
                $now,
                Hash::make("una_facil"),
                Role::$admin,
            ],*/
            [
                "Leopoldo",
                "Ontiveros",
                "Álvarez",
                "6180000050",
                "admin@nova.com",
                $now,
                Hash::make("una_facil"),
                Role::$admin,
            ],
            [
                "Sara Ofelia",
                "Ontiveros",
                "Acosta",
                "6181097378",
                "saraofe16@gmail.com",
                $now,
                Hash::make("Saraoar1"),
                Role::$phlebotomist,
            ],
            [
                "Marzia Paola",
                "Esparza",
                "Gracia",
                "6181455799",
                "paoolaeg12@gmail.com",
                $now,
                Hash::make("Marziar2"),
                Role::$phlebotomist,
            ],
            [
                "Xóchitl Fierro",
                "Fierro",
                "de la Rosa",
                "6181098947",
                "xochitlfierro@hotmail.com",
                $now,
                Hash::make("Xochitlr3"),
                Role::$phlebotomist,
            ],
            [
                "Lidia Verónica",
                "Juárez",
                "Moreno",
                "6183705088",
                "lemonjuarez27@icloud.com",
                $now,
                Hash::make("Lidiajm2"),
                Role::$phlebotomist,
            ],
            [
                "Alondra Sarahi",
                "Chaidez",
                "Ávila",
                "6181004112",
                "qfbchaidez_93@hotmail.com",
                $now,
                Hash::make("Alondra2"),
                Role::$phlebotomist,
            ],
            [
                "Jonatan",
                "Ortiz",
                "Pérez",
                "6183080578",
                "jonyknoxville91@gmail.com",
                $now,
                Hash::make("Jonatan2"),
                Role::$phlebotomist,
            ],
            [
                "Maura Janeth",
                "García",
                "Contreras",
                "6183026760",
                "mauneth076@gmail.com",
                $now,
                Hash::make("Mauragc2"),
                Role::$phlebotomist,
                             
            ],
        ];  

        foreach($users as $user) {
            User::create([
                'name' => $user[0],
                'last_name_father' => $user[1],
                'last_name_mother' => $user[2],
                'phone_number' => $user[3],
                'email' => $user[4],
                'email_verified_at' => $user[5],
                'password' => $user[6],
                'role_id' => $user[7],
                'primary_key' => $user[8],
                
                
            ]);
            
        }

        $customer = User::create([
            'name' => "Juda",
            'last_name_father' => "Alector",
            'last_name_mother' => "Vallejo",
            'phone_number' => "4770001111",
            'email' => "customer@nova.com",
            'email_verified_at' => $now,
            'password' => Hash::make("una_facil"),
            'role_id' => Role::$customer,
            'primary_key' => "",
        ]); 

        $info = CustomerInfo::create([
            "gender" => "Hombre",
            "birthdate" => "1997-04-15",
        ]);

        $patient = Patient::create([
            'name' => "Juda",
            'last_name_father' => "Alector",
            'last_name_mother' => "Vallejo",
            "gender" => "Hombre",
            "birthdate" => "1997-04-15",
            "customer_info_id" => $info->id,
            'primary_key' => " ",
        ]);

        $info->update(["patient_id" => $patient->id]);
        $info->user()->save($customer);


        for ($i = 0, $e = 4; $i < $e; $i++) { 
            Address::create([
                "street" => $faker->streetName(),
                "neighborhood" => $faker->secondaryAddress(),
                "num_ext" => random_int(300, 400),
                "state" => "Durango",
                "city" => "Durango",
                "references" => "Esta dirección está generada automáticamente",
                "zip_code" => "34000",
                "latitude" => $faker->latitude(24.007923, 24.044162),
                "longitude" => $faker->longitude(-104.632945, -104.696400),
                "customer_info_id" => $info->id,
            ]);
        }
        // User::factory()->count(30)->create();
    }
}

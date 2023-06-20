<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\CustomerInfo;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory"s corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $password = bcrypt("una_facil");
        $roleId  = random_int(1,3);

        return [
            "name" => str_replace("'", "",  $this->faker->name()),
            "email" => $this->faker->unique()->safeEmail(),
            "email_verified_at" => now(),
            "password" => $password,
            "last_name_father" => str_replace("'", "",  $this->faker->lastName()),
            "last_name_mother" => str_replace("'", "",  $this->faker->lastName()),
            "phone_number" => "4774667658",
            "role_id" => $roleId,
            "primary_key" => " ",
        ];
    }

    public function configure() {
        return $this->afterCreating(function(User $user){
            if($user->role_id == Role::$customer){
                $gender = array("Hombre", "Mujer")[random_int(0,1)];
                $birthdate = $this->faker->date();

                
                $info = CustomerInfo::create([
                    "gender" => $gender,
                    "birthdate" => $birthdate,
                ]);

                $patient = Patient::create([
                    'name' => $user->name,
                    'last_name_father' => $user->last_name_father,
                    'last_name_mother' => $user->last_name_mother,
                    "gender" => $gender,
                    "birthdate" => $birthdate,
                    "customer_info_id" => $info->id
                ]);
        
                $info->update(["patient_id" => $patient->id]);
                $info->user()->save($user);

                for ($i = 0, $e = rand(1,4); $i < $e; $i++) { 
                    Address::create([
                        "street" => $this->faker->streetName(),
                        "neighborhood" => $this->faker->secondaryAddress(),
                        "num_ext" => random_int(300, 400),
                        "state" => "Durango",
                        "city" => "Durango",
                        "references" => "Esta dirección está generada automáticamente",
                        "zip_code" => "34000",
                        "latitude" => $this->faker->latitude(24.007923, 24.044162),
                        "longitude" => $this->faker->longitude(-104.632945, -104.696400),
                        "customer_info_id" => $info->id,
                    ]);
                }
            }
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                "email_verified_at" => null,
            ];
        });
    }
}

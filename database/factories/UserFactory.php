<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'usuario' => $this->faker->unique()->userName,
            'correo' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('contraeña'),
            'idRol' => 3,
            'estado' => random_int(0,1), 
            'idEscuela' =>  random_int(1, 15)
        ];
    }
    
}

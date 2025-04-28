<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_ES'); // Using Spanish locale for more realistic names

        // Create 50 sample patients
        for ($i = 0; $i < 50; $i++) {
            Paciente::create([
                'nombre' => $faker->firstName,
                'apellidos' => $faker->lastName . ' ' . $faker->lastName,
                'telefono' => $faker->phoneNumber,
                'correo' => $faker->unique()->safeEmail,
                'descripcion' => $faker->optional()->text(200),
                'fecha_registro' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s')
            ]);
        }
    }
}

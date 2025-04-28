<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctores = [
            [
                'nombre' => 'Dr. Carlos Rodríguez',
                'correo' => 'carlos.rodriguez@clinicadental.com',
                'especialidad' => 'Odontología General',
                'color_hex' => '#4285F4', // Azul
                'telefono' => '555-123-4567'
            ],
            [
                'nombre' => 'Dra. Ana Martínez',
                'correo' => 'ana.martinez@clinicadental.com',
                'especialidad' => 'Ortodoncia',
                'color_hex' => '#EA4335', // Rojo
                'telefono' => '555-234-5678'
            ],
            [
                'nombre' => 'Dr. Miguel Sánchez',
                'correo' => 'miguel.sanchez@clinicadental.com',
                'especialidad' => 'Cirugía Maxilofacial',
                'color_hex' => '#FBBC05', // Amarillo
                'telefono' => '555-345-6789'
            ],
            [
                'nombre' => 'Dra. Laura Díaz',
                'correo' => 'laura.diaz@clinicadental.com',
                'especialidad' => 'Endodoncia',
                'color_hex' => '#34A853', // Verde
                'telefono' => '555-456-7890'
            ],
            [
                'nombre' => 'Dr. José Gómez',
                'correo' => 'jose.gomez@clinicadental.com',
                'especialidad' => 'Odontopediatría',
                'color_hex' => '#9C27B0', // Morado
                'telefono' => '555-567-8901'
            ]
        ];

        foreach ($doctores as $doctor) {
            Doctor::create($doctor);
        }
    }
}

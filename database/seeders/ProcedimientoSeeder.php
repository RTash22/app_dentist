<?php

namespace Database\Seeders;

use App\Models\Procedimiento;
use Illuminate\Database\Seeder;

class ProcedimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procedimientos = [
            [
                'nombre' => 'Revisión dental',
                'descripcion' => 'Evaluación inicial completa del estado bucal del paciente. Incluye exploración de dientes, encías, mucosas y articulación temporomandibular. Fundamental para establecer un diagnóstico y plan de tratamiento.'
            ],
            [
                'nombre' => 'Limpieza dental (profilaxis)',
                'descripcion' => 'Procedimiento preventivo que incluye eliminación de placa bacteriana y cálculo dental, pulido de superficies dentales y aplicación de flúor si es necesario. Recomendado cada 6 meses.'
            ],
            [
                'nombre' => 'Consulta',
                'descripcion' => 'Cita para evaluación general, diagnóstico específico o discusión detallada de planes de tratamiento. Incluye tiempo para resolver dudas del paciente.'
            ],
            [
                'nombre' => 'Radiografía dental',
                'descripcion' => 'Examen diagnóstico mediante imágenes radiográficas. Puede incluir radiografías periapicales, panorámicas, o de aleta de mordida según las necesidades específicas del diagnóstico.'
            ],
            [
                'nombre' => 'Urgencia dental',
                'descripcion' => 'Atención inmediata para casos que requieren tratamiento urgente como dolor agudo, traumatismos, inflamación severa o sangrado. Incluye evaluación rápida y tratamiento paliativo.'
            ],
        ];

        foreach ($procedimientos as $procedimiento) {
            Procedimiento::create($procedimiento);
        }
    }
}

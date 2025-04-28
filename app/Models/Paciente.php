<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    
    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'correo',
        'descripcion',
        'fecha_registro'
    ];

    // Relación con consultas (un paciente puede tener muchas consultas)
    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'id_paciente');
    }

    // Relación con historial médico
    public function historialesMedicos()
    {
        return $this->hasMany(HistorialMedico::class, 'id_paciente');
    }
}
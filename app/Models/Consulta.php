<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paciente',
        'id_doctor',
        'id_procedimiento',
        'descripcion_manual',
        'observaciones',
        'estado',
        'fecha',
        'hora',
        'hora_fin',
    ];

    // Relación con paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    // Relación con doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }

    // Relación con procedimiento
    public function procedimiento()
    {
        return $this->belongsTo(Procedimiento::class, 'id_procedimiento');
    }
}
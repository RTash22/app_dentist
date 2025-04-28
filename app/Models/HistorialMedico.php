<?php   

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    use HasFactory;

    protected $table = 'historial_medico';
    
    protected $fillable = [
        'id_paciente',
        'id_doctor',
        'fecha',
        'procedimiento',
        'notas'
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
}
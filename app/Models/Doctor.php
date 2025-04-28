<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctores';
    
    protected $fillable = [
        'nombre',
        'correo',
        'especialidad',
        'color_hex',
        'telefono'
    ];

    // Relación con consultas (un doctor puede tener muchas consultas)
    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'id_doctor');
    }

    // Relación con historial médico
    public function historiales()
    {
        return $this->hasMany(HistorialMedico::class, 'id_doctor');
    }
}
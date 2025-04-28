<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    use HasFactory;

    protected $table = 'procedimientos';
    
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    // Relación con consultas (un procedimiento puede estar en muchas consultas)
    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'id_procedimiento');
    }
}
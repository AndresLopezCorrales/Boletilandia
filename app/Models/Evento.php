<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'NombreEvento',
        'FechaEvento',
        'DireccionEvento',
        'LugarEvento',
        'imagen_path'
    ];

    public function secciones()
    {
        return $this->hasMany(Seccion::class, 'evento_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($evento) {
            $evento->secciones()->each(function ($seccion) {
                $seccion->delete(); // Elimina cada sección, activando la eliminación en cascada de los asientos
            });
        });
    }
}

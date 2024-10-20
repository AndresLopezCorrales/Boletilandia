<?php

namespace App\Models;

use App\Models\Seccion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'seccion_id',
        'numero_asiento',
        'disponibilidad_asiento'

    ];

    public function seccion(){
        return $this->belongsTo(Seccion::class, 'seccion_id'); //seccion id is powering the relationship
    }

}

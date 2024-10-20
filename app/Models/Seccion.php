<?php

namespace App\Models;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'evento_id',
        'letra_seccion',
        'precio',
        'info-visibilidad'

    ];

    public function evento(){
        return $this->belongsTo(Evento::class, 'evento_id'); //evento id is powering the relationship
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }

    public function recintos()
    {
        return $this->belongsToMany(Recinto::class);
    }

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class);
    }

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class);
    }
}

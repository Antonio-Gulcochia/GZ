<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'necesidadesEspecificas'];

    public function especies()
    {
        return $this->belongsToMany(Especie::class);
    }

    public function animales()
    {
        return $this->belongsToMany(Animal::class);
    }
}

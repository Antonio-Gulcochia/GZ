<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function recintos()
    {
        return $this->belongsToMany(Recinto::class);
    }

    public function animales()
    {
        return $this->hasMany(Animal::class);
    }
}

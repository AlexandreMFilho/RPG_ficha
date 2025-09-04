<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criatura extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tipo',
    ];

    public function valquiria()
    {
        return $this->hasOne(Valquiria::class);
    }

    public function personagem()
    {
        return $this->hasOne(Personagem::class);
    }

    public function monstro()
    {
        return $this->hasOne(Monstro::class);
    }
}

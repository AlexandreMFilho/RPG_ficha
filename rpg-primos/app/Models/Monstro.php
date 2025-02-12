<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monstro extends Model
{
    use HasFactory;

    protected $fillable = ['criatura_id', 'atributos', 'habilidades'];

    protected $casts = [
        'atributos' => 'json',
        'habilidades' => 'json',
    ];

    public function criatura()
    {
        return $this->belongsTo(Criatura::class);
    }
}

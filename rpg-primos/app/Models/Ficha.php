<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $fillable = [
        'criatura_id',
        // 'dados'
    ];

    // protected $casts = [
    //     'dados' => 'json',
    // ];

    public function criatura()
    {
        return $this->belongsTo(Criatura::class);
    }
}

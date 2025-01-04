<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    /** @use HasFactory<\Database\Factories\TacheFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titre',
        'description',
        'statut',
        'priorite',
        'date_limite',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

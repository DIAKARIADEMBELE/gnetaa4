<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeDuVehicule',
        'marque',
        'modele',
        'numeroImmatricul',
        'prix',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vignette(): HasOne
    {
        return $this->hasOne(Vignette::class);
    }
}

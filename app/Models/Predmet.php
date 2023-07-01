<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predmet extends Model
{
    use HasFactory;

    protected $table = 'predmeti';

    protected $fillable = [
        'naziv', 'opis',
        'profesor_id'
    ];

    public function terminipredavanja()
    {
        return $this->hasMany(TerminPredavanja::class, 'predmet_id');
    }
}
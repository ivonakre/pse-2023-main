<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesori';

    protected $fillable = [
        'ime', 'prezime', 'korisnico_ime', 
        'lozinka', 'stalno_uposlen', 'spol', 
    ];

    public function predmeti()
    {
        return $this->hasMany(Predmet::class, 'profesor_id');
    }
}
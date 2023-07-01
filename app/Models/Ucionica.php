<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucionica extends Model
{
    use HasFactory;

    protected $table = 'ucionica';

    protected $fillable = ['naziv', 'vrsta'];

    public function terminipredavanja()
    {
        return $this->hasMany(TerminPredavanja::class, 'ucionica_id');
    }
}
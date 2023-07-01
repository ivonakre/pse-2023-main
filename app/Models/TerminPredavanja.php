<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminPredavanja extends Model
{
    use HasFactory;

    protected $table = 'termini_predavanja';

    protected $fillable = [
        'satnica', 
        'ucionica_id', 'predmet_id'
    ];

    public function ucionica()
    {
        return $this->belongsTo(Ucionica::class, 'ucionica_id');
    }

    public function predmet()
    {
        return $this->belongsTo(Predmet::class, 'predmet_id');
    }
}
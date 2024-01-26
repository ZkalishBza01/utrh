<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatosVacantes extends Model
{
    use HasFactory;
    protected $fillable=[
        'candidato_id',
        'vacante_id',
    ];

    public function candidato()  {

     
        return $this->belongsTo(Candidato::class);
    }

    public function vacante()  {

     
        return $this->belongsTo(Vacante::class);
    }
}

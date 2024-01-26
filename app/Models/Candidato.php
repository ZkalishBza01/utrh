<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{ public $timestamps = false;
    use HasFactory;
    protected $fillable=[
        'sexo',
        'pretencionEconomica',
        'telefono',
        'telefono2',
        'domicilio',
        'descripcion',
        'cv',
        'user_id',
        'municipio_id',
        'escolaridad_id',
        //TODO agregar id?municipio
    ];

    public function user()  {

        return $this->belongsTo(User::class);
    }
    public function municipios()  {

        return $this->belongsTo(Municipio::class);
    }
    public function vacantes()
    {
        return $this->belongsToMany(Vacante::class, 'candidatos_vacantes');
    }

    public function escolaridad()  {

        return $this->belongsTo(Escolaridad::class);
    }
    
}

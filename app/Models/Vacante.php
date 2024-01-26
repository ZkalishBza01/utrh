<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
   
    use HasFactory;
    protected $fillable=[
        'nombre',
        'descripcion',
        'observaciones',        
        'sueldo',
        'municipio_id',
        'reclutador_id',
        'cliente_id'
    ];

    public function municipio()  {

        return $this->belongsTo(Municipio::class);
    }
    public function reclutador()  {

        return $this->belongsTo(Reclutador::class);
    }
    public function cliente()  {

        return $this->belongsTo(Cliente::class);
    }

    public function candidatos()
    {
        return $this->belongsToMany(Candidato::class, 'candidatos_vacantes');
    }
}

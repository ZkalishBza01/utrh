<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $fillable=[
        'nombre'
    ];

    public function estado()  {

        return $this->belongsTo(Estado::class);
    }

    public function vacantes()  {

        return $this->hasMany(Vacante::class);
    }

    public function candidatos()  {

     
        return $this->hasMany(Canditato::class);
    }

   
}

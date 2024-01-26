<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Escolaridad extends Model
{
    use HasFactory;

    // este es para evitar la creacion de los campos updated_at", "created_at 
    public $timestamps = false;
    protected $fillable=[
        'nombre'
    ];




    public function candidatos()  {

     
        return $this->hasMany(Canditato::class);
    }
}

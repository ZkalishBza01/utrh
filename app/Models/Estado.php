<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $fillable=[
        'nombre'
    ];


    public function municipio()  {

        return $this->hasMany(Municipio::class);
    }
}

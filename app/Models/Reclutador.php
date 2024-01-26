<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclutador extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        
        'user_id',
     
       
    ];

    public function vacantes()  {

        return $this->hasMany(Vacante::class);
    }




    public function user()  {

        return $this->belongsTo(User::class);
    }
}

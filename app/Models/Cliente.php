<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{  public $timestamps = false;
    use HasFactory;
    protected $fillable=[
        'giro'
    ];

    public function users()  {

        return $this->belongsTo(User::class);
    }

    public function vacantes()  {

        return $this->hasMany(Vacante::class);
    }

}

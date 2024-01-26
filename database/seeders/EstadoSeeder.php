<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $estado1 = Estado::create(['nombre'=>'AGUASCALIENTES']);
                $estado2 = Estado::create(['nombre'=>'BAJA CALIFORNIA']);
                $estado3 = Estado::create(['nombre'=>'BAJA CALIFORNIA SUR']);
                $estado4 = Estado::create(['nombre'=>'CAMPECHE']);
                $estado5 = Estado::create(['nombre'=>'COAHUILA DE ZARAGOZA']);
                $estado6 = Estado::create(['nombre'=>'COLIMA']);
                $estado7 = Estado::create(['nombre'=>'CHIAPAS']);
                $estado8 = Estado::create(['nombre'=>'CHIHUAHUA']);
                $estado9 = Estado::create(['nombre'=>'CIUDAD DE MÉXICO']);
                $estado10 = Estado::create(['nombre'=>'DURANGO']);
                $estado11 = Estado::create(['nombre'=>'GUANAJUATO']);
                $estado12 = Estado::create(['nombre'=>'GUERRERO']);
                $estado13 = Estado::create(['nombre'=>'HIDALGO']);
                $estado14 = Estado::create(['nombre'=>'JALISCO']);
                $estado15 = Estado::create(['nombre'=>'MÉXICO']);
                $estado16 = Estado::create(['nombre'=>'MICHOACÁN DE OCAMPO']);
                $estado17 = Estado::create(['nombre'=>'MORELOS']);
                $estado18 = Estado::create(['nombre'=>'NAYARIT']);
                $estado19 = Estado::create(['nombre'=>'NUEVO LEÓN']);
                $estado20 = Estado::create(['nombre'=>'OAXACA']);
                $estado21 = Estado::create(['nombre'=>'PUEBLA']);
                $estado22 = Estado::create(['nombre'=>'QUERÉTARO']);
                $estado23 = Estado::create(['nombre'=>'QUINTANA ROO']);
                $estado24 = Estado::create(['nombre'=>'SAN LUIS POTOSÍ']);
                $estado25 = Estado::create(['nombre'=>'SINALOA']);
                $estado26 = Estado::create(['nombre'=>'SONORA']);
                $estado27 = Estado::create(['nombre'=>'TABASCO']);
                $estado28 = Estado::create(['nombre'=>'TAMAULIPAS']);
                $estado29 = Estado::create(['nombre'=>'TLAXCALA']);
                $estado30 = Estado::create(['nombre'=>'VERACRUZ DE IGNACIO DE LA LLAVE']);
                $estado31 = Estado::create(['nombre'=>'YUCATÁN']);
                $estado32 = Estado::create(['nombre'=>'ZACATECAS']);
    }
}

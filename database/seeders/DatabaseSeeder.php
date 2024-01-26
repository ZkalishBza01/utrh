<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Vacante;
use App\Models\Reclutador;
use App\Models\Candidato;
use Illuminate\Database\Seeder;
use App\Models\Cliente; 
use App\Models\Escolaridad;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  

        $this->call(EstadoSeeder::class);
        $this->call(MunicipioSeeder::class);
        Escolaridad::factory(10)->create();
        User::factory()->create([
            'email'=>'i@admin.com',
            'password'=> bcrypt('123456')
        ]);
        User::factory()->create([
            'email'=>'i2@admin.com',
            'password'=> bcrypt('123456')
        ]);
        User::factory()->create([
            'email'=>'i3@admin.com',
            'password'=> bcrypt('123456')
        ]);
        User::factory(10)->create();
        Reclutador::factory()->create([
            
            'user_id'=> '1'
        ]);
        Reclutador::factory(10)->create();

        Candidato::factory()->create([
            
            'user_id'=> '2'
        ]);
        Cliente::factory()->create([
            
            'user_id'=> '3'
        ]);

        
        
       
        
        Cliente::factory(10)->create();
       

        
        Vacante::factory()->create([
            
            'reclutador_id'=> '1'
        ]);
        Vacante::factory(30)->create();
    }
}

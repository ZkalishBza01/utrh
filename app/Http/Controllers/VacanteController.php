<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Vacante;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Cliente;
use App\Models\Candidato;
use App\Models\Reclutador;
use App\Models\CandidatosVacantes;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class VacanteController extends Controller
{
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //TODO falta mandarle el id del candidato del usuario logeado
    public function index(Request $request)
    {
        $vacantes =Vacante::with('municipio.estado')
      
        
            ->where('nombre','like',"%$request->q%")
       
        ->paginate(5);
       

        
       return Inertia::render('Vacantes/Index',[
            'vacantes'=>$vacantes,
            'municipios'=>Municipio::get()
            
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
        
        return Inertia::render('Vacantes/Create',[
            'reclutador' =>Reclutador::get()
            ->where('id',"$request")
            ->first(),
            'municipios'=>Municipio::get(),
            'estados'=>Estado::get(),  
            'clientes'=>Cliente::get(),
           
              
            
        ]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'nombre' =>'required',
            'descripcion' =>'required',
            'observaciones' =>'required',
            'sueldo'=>'required',
            'municipio_id'=>'required',
            'reclutador_id'=> 'required',
            'cliente_id'=> 'required',
        ]);
      
          

        $vacante= Vacante::create($request->all());

        return redirect()->route('vacante.edit',$vacante->id)->with('status','Vacante Creada');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        $result = $vacante->load('municipio');
        $result = $vacante->load('cliente');

        return Inertia::render('Vacantes/Show',[
            'vacante' =>$vacante,
            'candidatos'=>Candidato::get()
            ->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      

        $vacantes =Vacante::with('municipio.estado')->where('reclutador_id',"$id") ->paginate(5);
        
        $candidatos =CandidatosVacantes::get() ;
        $candidatos= $candidatos->load('candidato.user') ->where('vacante.reclutador_id',"$id");
       
        

        return Inertia::render('Vacantes/Edit',[
            'vacantes' =>$vacantes,
            'municipios'=>Municipio::get(),
            'estados'=>Estado::get(), 
            'clientes'=>Cliente::get(), 
            'candidatos2' => $candidatos,
            
           
              
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacante $vacante)
    {
        $request->validate([
            'nombre' =>'required',
            'observaciones' =>'required',
            'sueldo'=>'required',
            'municipio_id'=>'required',
            'cliente_id'=> 'required',
        ]);

        $vacante->update($request->all());

        return redirect()->route('vacante.index')->with('status','Vacante Actualizada'); ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacante $vacante)
    {
        $vacante->delete();
        return redirect()->route('vacante.index')->with('status','Vacante Eliminada'); 
    }
   
}

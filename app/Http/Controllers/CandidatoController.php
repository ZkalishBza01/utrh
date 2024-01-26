<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Candidato;
use App\Models\Escolaridad;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Hash;
use File;
use Illuminate\Support\Facades\Storage;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Inertia::render('Candidatos/Edit',[
            'candidato' =>Candidato::get()
            ->where('id',"$id")
            ->first(),
            'municipios'=>Municipio::get(),
            'estados'=>Estado::get(),
            'escolaridads'=>Escolaridad::get(),
            
            
            
           
              
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        //dd($request->file('cv'));
         
            if($request->hasFile('cvfile')){ 
                $request->validate([
                    'cvfile'=>'required|file|mimes:pdf'
                ]);
               
            $file = $request->file('cvfile');
            $file_name =$candidato->id. '.pdf' ;
            $file->move(public_path('cv'),$file_name);
            
            $request->merge(['cv' => $file_name]);
        
            
            }
        
         $request->validate([
            'sexo' =>'required',
            'pretencionEconomica' =>'required',
            'telefono'=>'required',
            'domicilio'=> 'required',
            'descripcion'=> 'required',            
            'municipio_id'=>'required',
            'escolaridad_id'=>'required',
            
        ]);

 
        

        $candidato->update($request->all());

        return redirect()->route('candidato.edit',$candidato->id)->with('status','Perfil Actualizado'); 
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

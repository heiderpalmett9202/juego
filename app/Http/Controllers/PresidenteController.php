<?php

namespace App\Http\Controllers;
use App\Models\Presidente;
use Illuminate\Http\Request;

class PresidenteController extends Controller
{
    public function listar(){
        
        $presidentes = Presidente::orderBy('id', 'desc')->get();
        return view('presidentes.listarpresidente', compact('presidentes'));
}

public function create(){ 
        
    
        $presidentes = Presidente::orderBy('id', 'desc')->get();
        return view('presidentes.createpresidente', compact('presidentes'));
    
}

public function store(Request $request){ 
        
    $presidente= new Presidente();//lo verde es el nombre del modelo y creo una variable $cliente
    $presidente->nombre=$request->nombre;//aca va los atributos como coloco en la migracion 
    $presidente->apellido=$request->apellido;
    $presidente->fecha_nac=$request->fecha_nac;
    $presidente->año=$request->año;
    $presidente->dni=$request->dni;
    $presidente->save();
    return $presidente;
    
    
}
public function edit(Presidente $presidente){//lo verde es el model y lo otro es la variable cliene en singular
    return view('presidentes.editpresidente',compact('presidente')); 
}

public function update(Request $request,Presidente $presidente){ 

    $presidente->nombre=$request->nombre;//aca va los atributos como coloco en la migracion 
    $presidente->apellido=$request->apellido;
    $presidente->fecha_nac=$request->fecha_nac;
    $presidente->año=$request->año;
    $presidente->dni=$request->dni;
    
    $presidente->save();
 
    return redirect()->route('presidente.listar'); 
 
  }

public function destroy(Presidente $presidente){
        
    $presidente->delete();
    
    return redirect()->route('presidente.listar');
}



}

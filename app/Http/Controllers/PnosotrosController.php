<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pnosotros;

class PnosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pnosotros=Pnosotros::find(1);
    
        return view('admin.pnosotros.index_panel', compact('Pnosotros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $url="";
        if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $url=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/',$url);
       }
       $imagen="";
        if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $imagen=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/',$imagen);
       }
       $imagen2="";
        if($request->hasFile('imagen2')){
         $file=$request->file('imagen2');
         $imagen2=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/',$imagen2);
       }
       $ted=new Pnosotros();
       $ted->url=$url;
       $ted->imagen=$imagen;
       $ted->titulo = $request->input('titulo');
       $ted->texto = $request->input('texto');
       $ted->imagen2=$imagen2;
       $ted->titulo2 = $request->input('titulo2');
       $ted->texto2 = $request->input('texto2');

    //    $cadena=time().substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
    //    $ted->slug=$cadena;
       $ted->save();
       //return 'Datos Guardados Correctamente';
    //    return redirect()->route('noticias.index')->with('status',
    //   'Datos Guardados Correctamente');
    $Pnosotros=Pnosotros::find(1);
    
    return view('admin.pnosotros.index', compact('Pnosotros'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pnosotros=Pnosotros::find($id);
    
        return view('admin.pnosotros.edit_panel', compact('Pnosotros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Pnosotros=Pnosotros::find($id);
    
      return view('admin.pnosotros.edit_panel', compact('Pnosotros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ted=Pnosotros::where('id','=',$id)->firstOrFail();
      
        
       $imagen="";
        if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $imagen=time().$file->getClientOriginalName();
         $file->move(public_path().'/imagenes/Pnosotros/',$imagen);
       }
       $imagen2="";
        if($request->hasFile('imagen2')){
         $file=$request->file('imagen2');
         $imagen2=time().$file->getClientOriginalName();
         $file->move(public_path().'/imagenes/Pnosotros/',$imagen2);
       }
       $imagen3="";
        if($request->hasFile('imagen3')){
         $file=$request->file('imagen3');
         $imagen3=time().$file->getClientOriginalName();
         $file->move(public_path().'/imagenes/Pnosotros/',$imagen3);
       }
       $titulo="";
       if($request->has('titulo')){
       $titulo = $request->input('titulo');
       }   
       $titulo2="";
       if($request->has('titulo2')){
       $titulo2 = $request->input('titulo2');
       }   
       $titulo3="";
       if($request->has('titulo3')){
       $titulo3 = $request->input('titulo3');
       }
       $texto="";
       if($request->has('texto')){
       $texto = $request->input('texto');
       }
       $texto2="";
       if($request->has('texto2')){
       $texto2 = $request->input('texto2');
       }
       $texto3="";
       if($request->has('texto3')){
       $texto3 = $request->input('texto3');
       }      

       
       $ted->imagen=$imagen;
       $ted->titulo = $titulo;
       $ted->texto = $texto;
       $ted->imagen2=$imagen2;
       $ted->titulo2 = $titulo2;
       $ted->texto2 = $texto2;
       $ted->imagen3=$imagen3;
       $ted->titulo3 = $titulo3;
       $ted->texto3 = $texto3;

    //    $cadena=time().substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
    //    $ted->slug=$cadena;
       $ted->save();
       //return 'Datos Guardados Correctamente';
    //    return redirect()->route('noticias.index')->with('status',
    //   'Datos Guardados Correctamente');
    $Pnosotros=Pnosotros::find(1);
    
    return view('admin.pnosotros.index_panel', compact('Pnosotros'));
    
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

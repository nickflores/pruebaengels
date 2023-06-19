<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdocente;
use App\Models\Pnosotros;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PdocenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Pdocente = Pdocente::all();
        return view('admin.pdocente.index_panel', compact('Pdocente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$Pdocente = Pdocente::all();
        return view('admin.pdocente.create_panel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Imagen, Video, titulo y texto
        $imagen="";
        if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $imagen=time().$file->getClientOriginalName();
         $file->move(public_path().'/imagenes/Pdocente/',$imagen);
       }
       $cargo="";
       if($request->has('cargo')){
       $cargo = $request->input('cargo');
       }
       $nombre="";
       if($request->has('nombre')){
       $nombre = $request->input('nombre');
       }

        $Pdocente = new Pdocente();
    
        $Pdocente->imagen = $imagen;
        $Pdocente->cargo = $cargo;
        $Pdocente->nombre = $nombre;
        $Pdocente->estado = 'Inactivo';
        $Pdocente->save();

        $Pdocente = Pdocente::all();
        
        return view('admin.pdocente.index_panel', compact('Pdocente'))->with('addPdocente', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pdocente $Pdo)
    {
        $Pnosotros=Pnosotros::find(1);
        $Pdocente=Pdocente::all();
        return view('pagina.nosotros', compact('Pnosotros','Pdocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pdocente = Pdocente::find($id);
        
        return view('admin.pdocente.edit_panel', compact('Pdocente','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function estado(Pdocente $Pdocente)
    {
        if($Pdocente->estado == 'Activo'){
            $Pdocente->update([
                'estado' => 'Inactivo',
            ]);
            $Pdocente->save();
            return redirect()->back()->with('update', 'ok');;
        }else{
            $Pdocente->update([
                'estado' => 'Activo',
            ]);
            $Pdocente->save();
            return redirect()->back()->with('update', 'ok');;
        }
    }
    public function update(Request $request, $id)
    {
        $ted=Pdocente::where('id','=',$id)->firstOrFail();
           // Imagen, Video, titulo y texto
           $imagen="";
           if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $imagen=time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/Pdocente/',$imagen);
          }
          $cargo="";
          if($request->has('cargo')){
          $cargo = $request->input('cargo');
          }
          $nombre="";
          if($request->has('nombre')){
          $nombre = $request->input('nombre');
          }
   
          if($request->hasFile('imagen')){
           $ted->imagen = $imagen;
          }
          
          if($request->has('cargo')){
           $ted->cargo = $cargo;
          }
          if($request->has('nombre')){
           $ted->nombre = $nombre;
          }
           $ted->estado = 'Inactivo';
           $ted->save();
   
           $Pdocente = Pdocente::all(); 
           return view('admin.pdocente.index_panel', compact('Pdocente'))->with('update', 'ok');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Pdocente::where('id','=',$id)->firstOrFail();
        $info->delete();
       return redirect()->route('plana_docente.index');

    }
}

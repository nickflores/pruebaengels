<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pproducto;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PproductoController extends Controller
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
       $Pproducto = Pproducto::all();
        return view('admin.Pproducto.index_panel', compact('Pproducto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Pproducto = Pproducto::all();
        return view('admin.Pproducto.create_panel', compact('Pproducto'));
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
         $file->move(public_path().'/imagenes/Pproducto/',$imagen);
       }
       $titulo="";
       if($request->has('titulo')){
       $titulo = $request->input('titulo');
       }
       $dato1="";
       if($request->has('dato1')){
       $dato1 = $request->input('dato1');
       }
       $dato2="";
       if($request->has('dato2')){
       $dato2 = $request->input('dato2');
       }
       $dato3="";
       if($request->has('dato3')){
       $dato3 = $request->input('dato3');
       }
      
        $ted = new Pproducto();
    
        $ted->imagen = $imagen;
        $ted->titulo = $titulo;
        $ted->dato1 = $dato1;
        $ted->dato2 = $dato2;
        $ted->dato3 = $dato3;
        $ted->estado = 'Inactivo';
        $ted->save();

        $Pproducto = Pproducto::all();
        
        return view('admin.Pproducto.index_panel', compact('Pproducto'))->with('addPproducto', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $Pdetfoto = Pdetfoto::all()->where('foto_id','=',$id);
//        $Pproducto = Pproducto::find($id);
                
//        return view('admin.Pproducto.show_panel', compact('Pdetfoto','Pproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pproducto = Pproducto::find($id);
        
        return view('admin.Pproducto.edit_panel', compact('Pproducto','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function estado(Pproducto $Pproducto)
    {
        if($Pproducto->estado == 'Activo'){
            $Pproducto->update([
                'estado' => 'Inactivo',
            ]);
            $Pproducto->save();
            return redirect()->back()->with('update', 'ok');;
        }else{
            $Pproducto->update([
                'estado' => 'Activo',
            ]);
            $Pproducto->save();
            return redirect()->back()->with('update', 'ok');;
        }
    }
    public function update(Request $request, $id)
    {
        $ted=Pproducto::where('id','=',$id)->firstOrFail();
           // Imagen, Video, titulo y texto
           $imagen="";
           if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $imagen=time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/Pproducto/',$imagen);
          }
          $titulo="";
          if($request->has('titulo')){
          $titulo = $request->input('titulo');
          }
             
          if($request->hasFile('imagen')){
           $ted->imagen = $imagen;
          }
          if($request->has('titulo')){
           $ted->titulo = $titulo;
          }
           $ted->estado = 'Inactivo';
           $ted->save();
   
           $Pproducto = Pproducto::all(); 
           return view('admin.Pproducto.index_panel', compact('Pproducto'))->with('update', 'ok');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Pproducto::where('id','=',$id)->firstOrFail();
        $info->delete();
       return redirect()->route('productos.index');

    }
}

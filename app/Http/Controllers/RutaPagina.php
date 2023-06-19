<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pnosotros;
use App\Models\Pdocente;
use App\Models\Pproducto;
use App\Models\Pcurso;
use App\Models\Pproyecto;

class RutaPagina extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexT()
    {
        return view('welcome');
    }
    
    public function nosotrosT()
    {
        $Pnosotros=Pnosotros::find(1);
        $Pdocente=Pdocente::all();
        return view('pagina.nosotros',compact('Pnosotros','Pdocente'));
    }
    public function productosT()
    {
        $Pproducto=Pproducto::all();
        return view('pagina.productos',compact('Pproducto'));
    }
    public function cursosT()
    {
        $Pcurso=Pcurso::all();
        return view('pagina.cursos',compact('Pcurso'));
    }
    public function proyectosT()
    {
        $Pproyecto=Pproyecto::all();
        return view('pagina.proyectos',compact('Pproyecto'));
    }
    public function contactenosT()
    {
        return view('pagina.contactenos');
    }
    public function intranetT()
    {
        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;
use App\Entities\ProveedorModel;
use Illuminate\Http\Request;

class Proveedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $proveedores = Proveedores::select('*');

        $limit=(isset($request->limit)) ? $request->limit:10;
 
        if(isset($request->search)){
            $proveedores = $proveedores->where('razonSocial','like', '%'.$request->search.'%')
             ->orWhere('nombreCompleto','like', '%'.$request->search.'%')
             ->orWhere('direccion','like', '%'.$request->search.'%')
             ->orWhere('telefono','like', '%'.$request->search.'%')
             ->orWhere('correo','like', '%'.$request->search.'%')
             ->orWhere('rfc','like', '%'.$request->search.'%');
        }
 
        $proveedores = $proveedores->paginate($limit)->appends($request->all());
 
        return view('proveedores.index', compact('proveedores')) ;
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
        //
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
        //
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

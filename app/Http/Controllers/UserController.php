<?php

namespace SeniorControl\Http\Controllers;
use SeniorControl\User;//modelo
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$libros=Libro::orderBy('id','DESC')->paginate(3);
        return view('bienvenido');//a donde quiere ser dirigido  
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
    
    $validatedData = $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'correo' => 'required',
        'pass' => 'required',
        'tipo' => 'required',
        
    ]);
       
        $user= new User();
        //$user->nombre=$request->input('nombre');
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->correo=$request->correo;
        $user->pass=$request->pass;
        $user->telefono=$request->telefono;
        $user->tipo=$request->tipo;
        $user->save();
        
        return "TU CUENTA HA SIDO CREADA EXITOSAMENTE";
    /*return redirect()->route('usuario.index')
                    ->with('success','user created successfully');*/
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

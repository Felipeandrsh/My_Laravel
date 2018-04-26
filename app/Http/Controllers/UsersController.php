<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Carbon\Carbon;
use App\Http\Requests\validacionUsuario; //Validacion del lado del servidos por medio de Request

class UsersController extends Controller
{
   
    public function home()
    {
        return view('home');
    }


    public function index()
    {
        $persona = User::all();

        return view('Usuarios.index', compact('persona'));
    }



    public function create()
    {
        return view('Usuarios.create');
    }


    public function store(validacionUsuario $request)
    {    
      //Validacion del lado del servidos por medio de Request
       $user = new User;
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->contrasena = bcrypt($request->input('contrasena'));
        $user->save();  //guardamos en la BD
    
      // // User::create($request->all());  
       return redirect()->route('user.index');
    }


    public function show($id)
    {
        $persona=User::findOrFail($id);
        
        return view('Usuarios.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $varUser =User::findOrFail($id);

        return view('Usuarios.edit', compact('varUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validacionUsuario $request, $id)
    {
        // $persona = User::findOrFail($id);

        DB::table('usuarios')->where('id', $id)->update([
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "email" => $request->input('email'),
            "contrasena" => $request->contrasena,
            "updated_at" => Carbon::now()
        ]);
          return redirect()->route('user.index');

        // return $request->contrasena;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index');
    }
}

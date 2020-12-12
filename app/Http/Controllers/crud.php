<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{

    public function index()
    {       $user = DB::table('usuarios')
                ->orderby('Usuario')
                ->get();
            return view ('crud.ShowUsers',[
                'usuarios' => $user
            ]);
    }

    public function poets()
    {       $poet = DB::table('poets')
                ->orderby('poetCode')
                ->get();
            return view ('crud.consultaPoets',[
                'poets' => $poet
            ]);
    }
    
    public function store(Request $request)
    {       
        $poet = DB::table('poets')
        ->insert([
            'poetCode' => $request ->input('poetCode'),
            'firstName' => $request ->input('fisrtName'),
            'surname' => $request ->input('suname'),
            'address' => $request ->input('address'),
            'postcode' => $id ->input('postcode'),
            'telephoneNumber' => $request ->input('telephoneNumber')
        ]); 
        return redirect()->action({'crud@poets'})
        ->with('status','Registro guardado');
        
    }
    public function show($id)
    {
        $poet = DB::table('poets')
        ->where('poetCode','=',$id)
        ->first();
        return view('crud.altadeUsers', 'poets' => $poet);
    }

    public function update(Request $request, $id)
    {
        $poet = DB::table('poets')
        ->where('poetCode','=',$request->('id'))
        ->update([
            'poetCode' => $request ->input('poetCode'),
            'firstName' => $request ->input('fisrtName'),
            'surname' => $request ->input('suname'),
            'address' => $request ->input('address'),
            'postcode' => $request ->input('postcode'),
            'telephoneNumber' => $request ->input('telephoneNumber')
        ]); 
        return redirect()->action({'crud@poets'})
        ->with('status','Actualización completa');
    }
    public function destroy($id)
    {
        $poet = DB::table('poets')
        ->where('poetCode','=',$id)
        ->delete(); 
        return redirect()->action({'crud@poets'})
        ->with('status','Actualización completa');    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EstructurasControl extends Controller
{
    public function trapecio($B =1, $base = 1, $haltura = 1) { 
        $a = (($B + $base)* $haltura)/2;
        return view('areaTrapecio',[
            'B' => $B,
            'b' => $base,
            'h' => $haltura,
            'a' => $a,
            ]); }
    public function apotema($lado= 1){
        $apotema = ($lado/2);
        return view('apotema',[
            'lado' => $lado,
            'apotema' => $apotema
            ]); }

    public function volumen($radio= 1, $h =2){
        define('pi', 3.14);
        $volumen = (pi * ($radio*$radio) *$h)/3;
        return view('volumenCono',[
            'radio' => $radio,
            'h' => $h,
            'volumen' => $volumen
            ]); }
    public function areaT($base=1, $h =2){
        $area = ($base*$h)/2;
        return view('areaTriangulo',[
            'base' => $base,
            'h' => $h,
            'area' => $area
            ]); }
    public function circulo($radio = 1){
        define('pi', 3.14);
        $longitud = pi*2*$radio;
        return view('circulo',[
            'radio' => $radio,
            'longitud' => $longitud
            ]); }

//DECISIONES
    public function voto(){
        $edad = 16;

        if ( $edad < 18 ){
            $sentencia= 'aún no puedes votar, espera un poco más.';}
        else
           
            $sentencia= 'debes votar con sabiduría.';
    
        return view('voto')
        ->with('edad',$edad)
        ->with('sentencia',$sentencia); }

    public function regalo(){
        $presupuesto = 500;
    
                if ( $presupuesto >= 251 ){
                    $opcion= 'Las joyas, definitivamente son el regalo perfecto.';}
                elseif ( $presupuesto >= 101){
                    $opcion= 'Las flores les gustan a todes, ¡adelante!';}
                elseif ( $presupuesto >= 11){
                    $opcion= 'Algo rico, como chocolates ;v';}
                else
                    {$opcion= 'Bueno... siempre están las tarjetas.';}
              
            return view('regalo')
            ->with('presupuesto',$presupuesto)
            ->with('opcion',$opcion); }   

    public function calificacion(){
        $calificacion = 10;
    
            if ( $calificacion == 10 ){    $letra='una "A".';  }
            elseif ( $calificacion == 9){   $letra='una "B".';  }
            elseif ( $calificacion == 8){   $letra='una "C".';  }
            elseif ( $calificacion == 7){   $letra='una "D".';  }
            elseif ( $calificacion == 6){   $letra='una "D"';   }
            else{   $letra='una "F".';  }
    
        return view('calificacion')
            ->with('calificacion',$calificacion)
            ->with('letra',$letra); }
    public function salario(){
        $horas = 45;
    
            if ( $horas <= 40){    $paga=$horas*10;  }
            else{   $paga= 400+ (($horas -40)*20);  }
    
        return view('salario')
            ->with('horas',$horas)
            ->with('paga',$paga); 
        }

    public function estacionamiento(){
        $horas = 15;
    
            if ( $horas <= 2 ){    $pago=$horas*5;  }
            elseif ( $horas <=5){   $pago=10+ (($horas-2)*4);  }
            elseif ( $horas <=10){   $pago=22+ (($horas-5)*3);  }
            else{   $pago=37+ (($horas-10)*2);  }
    
        return view('estacionamiento')
            ->with('horas',$horas)
            ->with('pago',$pago); }
//CICLOS
    public function profesor(){
        $base = 1500;
        $incremento= $base;
    
        for ($i = 0; $i < 5; $i++){
            $base = $incremento*1.1;
            echo "El sueldo del año ", $i, " es ", $base, "<br>" ; 
            $incremento = $base;
        }
        return view('profe',[
            'base' => $base,
            'i' => $i,
            ]); }

    public function multiplicacion(){
        $multi = 10;
        $result= 0;
    
                for ($i = 1; $i < 11; $i++){
                $result = $multi*$i;
                echo $i, "X" ,$multi, "=", $multi*$i,"<br>";
                }
    
        return view('multiplicacion',[
            'multi' => $multi,
            'result' => $result,
            'i' => $i,
            ]); }
    
    public function cuenta(){
        $cant = 10;
        $pos= 0;
        $neg= 0;
        $cero= 0;
    
        for ($i = 0; $i < $cant; $i++){
            $num= rand(1, -1) . "\n";
            if ( $num >= 1 ) {  $pos=$pos+1 ;   }
            elseif ( $num == 0) {   $cero= $cero+1; }
            else    {   $neg= $neg+1;   }
          
        }
        return view('posNeg',[
            'cant' => $cant,
            'pos' => $pos,
            'neg' => $neg,
            'cero' => $cero,  ]); }


    public function login(){
        return view('pintores.login');
    }
    public function validarLogin (Request $request) {
        $user = $request -> input('user');
        $pass = $request -> input('pass');
        $key = Hash:: make ( $request ->input('key'));

        if ($user === 'PrimerUsuario')
            $url='pintores.dashboard';
        else $url='pintores.login';


        return view($url, [
            'user' => $request-> input('user'),
            'key' => $key
            ]);
    } 
    
}


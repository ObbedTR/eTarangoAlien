@extends('layouts.master2')
@section('tittle', 'Poetas')
@section('made')    
<br><br><br>
    <center><h1>TABLA POETAS</h1></center>
    <div>
    <center>   <a href=""> <h2>Agregar nuevo usuario</h2> </a>  </center></div>
        <table class="table table-dark table-borderless">
            
            <thead>
                <tr>
                <th scope="col">Código de poeta</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Dirección</th>
                <th scope="col">Código Postal</th>
                <th scope="col">Número telefónico</th>
                <th scope="col">UPDATE</th>
                <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($poets as $poet)
                    <tr>
                    <th scope="row">{{$poet->poetCode}}</th>
                    <td>{{$poet->firstName}}</td>
                    <td>{{$poet->surname}}</td>
                    <td>{{$poet->address}}</td>
                    <td>{{$poet->postcode}}</td>
                    <td>{{$poet->telephoneNumber}}</td>
                    <td> <a href="{{action('crud@show',['id' => {{$poet->poetCode}} ])}}"><img url="https://cdn.onlinewebfonts.com/svg/img_515158.png" alt="imgupdate"></a>  </td>
                    <td> <img url="https://www.pngrepo.com/download/20658/delete.png" alt="imgdelete"> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
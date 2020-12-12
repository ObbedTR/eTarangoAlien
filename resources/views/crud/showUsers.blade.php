@extends ('layouts.master2')

@section('tittle', 'Mostrar Usuarios')
@section('navbar')
<h3>Usuario: {{$user}}</h3>
<h4>Key: {{$key}} </h4>

@stop 

@section('made')
<center><div><h1 style="font-size: 800%" >Mostrar Usuarios</h1></div></center>
<br><br><br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">IDusuario</th>
      <th scope="col">Usuario</th>
      <th scope="col">password</th>
      <th scope="col">key</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
@foreach(@usuarios as $user)
{    <tr>
      <th scope="row">{{$User - IDusuario}}</th>
      <td>{{$User-> usuario}}</td>
      <td>{{$User-> password}}</td>
      <td>{{$User-> key}}</td>
    </tr>
}
@endforeach
  </tbody>
</table>
@stop

@section('by', 'Jaime Obbed Tarango Ramírez 5°E')
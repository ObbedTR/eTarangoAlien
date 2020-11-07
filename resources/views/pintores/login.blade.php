@extends ('layouts.master2')

@section('tittle', 'Loging')
@section('navbar')
<p>¿Funciona este section? ¡Sí funciona!</p>
@stop 

@section('made')


<form action="{{action('EstructurasControl@validarLogin')}}" method="POST">
    {{csrf_field()}}
    <label for="user">User</label>
    <input type="text" name="user">
    <br>
    <label for="pass">Password</label>
    <input type="text" name="pass">
    <br>
    <label for="key">Key</label>
    <input type="text" name="key">
    <br>
    <input type="submit" name="submit" value="submit">

</form>

@stop

@section('by', 'Jaime Obbed Tarango Ramírez 5°E')
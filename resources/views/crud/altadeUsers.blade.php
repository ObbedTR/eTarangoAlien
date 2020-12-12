@extends ('layouts.master2')

@if(isset($poeta) and is_object($poet))
  @php
    $tittle= 'Modificar un registro';
    $poetCode= $poeta -> poetCode;
    $firstName= $poeta -> firstName;
    $surname= $poeta -> surname;
    $address= $poeta -> address;
    $postcode= $poeta -> postcode;
    $telephoneNumber= $poeta -> telephoneNumber;
  @endphp

@else

  @php
    $tittle= 'Alta de registro';
    $poetCode='';
    $firstName= '';
    $surname= '';
    $address= '';
    $postcode= '';
    $telephoneNumber= '';
  @endphp

@endif

@section('tittle', {{$tittle}})
@section('navbar')
@stop 

@section('made')

<center><div><h1 style="font-size: 800%" >Pintoras Y Pintores</h1></div></center>
<br><br><br>

<form action="{{isset($poeta) ? action('crud@update') :action('crud@store')}}" method="post">
      {{csrf_field()}}
      @if(isset($poeta) and is_object($poet))
      <input type="hidden" name="id" value="{{poetCode}}">
      @endif

      <label for="poetCode">poetCode</label>
      <input type="text" name="Codigo de poeta" value="{{$poetCode}}">
      <br>
      <label for="firstName">firstName</label>
      <input type="text" name="First Name" value="{{$firstName}}">
      <br>
      <label for="surname">surname</label>
      <input type="text" name="Surname" value="{{$surname}}">
      <br>
      <label for="address">address</label>
      <input type="text" name="Address" value="{{$address}}">
      <br>
      <label for="postcode">postcode</label>
      <input type="text" name="Postal Code" value="{{$postcode}}">
      <br>
      <label for="telephoneNumber">telephoneNumber</label>
      <input type="text" name="Telephone" value="{{$telephoneNumber}}">
      <br>
      <input type="submit"  value="submit"><br>
</form>

 
@stop

@section('by', 'Jaime Obbed Tarango Ramírez 5°E')
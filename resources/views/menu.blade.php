@extends('layouts.master2')
@section('tittle','Página principal')

@section('made')

<center><H1>Uso de controlador y enlaces</H1>
</center>


<table class="table table-borderless" WIDTH="500";>
  <thead>

  </thead>
  <tbody>
  <td colspan="3"><center>SECUENCIALES</center></td>
  <tr>
      <td><a href="{{route('Area.Trapecio')}}"><center>Obtener el Área De Un Trapecio</center></a></td>
    </tr>
    <tr>
      <td><a href="{{route('Apotema.Cuadrado')}}"><center>Obtener el Apotema De Un Cuadrado</center></a></td>
    </tr>
    <tr>
      <td><a href="{{route('Volumen.Cono')}}"><center>Obtener El Volúmen De Un Cono</center></a></td>
    </tr>
    <tr>
      <td><a href="{{route('Area.Triangulo')}}"><center>Obtener El Área De Un Triángulo</center></a></td>
    </tr>
    <tr>
      <td><a href="{{route('Longitud.Circulo')}}"><center>Obtener La Longitud De Un Círculo</center></a></td>
    </tr>

    <td colspan="3"><center>DECISIONES</center></td>
    <tr>
      <td><a href="{{action('EstructurasControl@voto')}}"><center>Saber Si Puedes Votar</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@regalo')}}"><center>¿Qué Regalar Para El 14 De Febrero?</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@calificacion')}}"><center>Equivalencia De Calificaciones</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@salario')}}"><center>Salario De Un Trabajador</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@estacionamiento')}}"><center>Cobro De Un Estacionamiento</center></a></td>
    </tr>
    <td colspan="3"><center>CICLOS</center></td>
    <tr>
      <td><a href="{{action('EstructurasControl@profesor')}}"><center>Suledo De Un Profesor</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@cuenta')}}"><center>¿Cuántos Números Son Positivos, Negativos O Ceros?</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@multiplicacion')}}"><center>Contaduría De Una Caja Registradora</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@multiplicacion')}}"><center>¿Cuántos Alumnos Aprovaron Y Cuántos Reprovaron?</center></a></td>
    </tr>
    <tr>
      <td><a href="{{action('EstructurasControl@multiplicacion')}}"><center>Tabla De Multiplicación De Un Número</center></a></td>
    </tr>
  </tbody>
</table>




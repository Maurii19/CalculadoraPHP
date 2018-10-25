<!DOCTYPE html>
<html>
@extends('layout.layout')
    @section('form')
        @if(isset($nombre))
        <center><h1>Hola {{ $nombre  }}</h1></center>
        <h3>Calculadora de {{ $nombre }}</h3>
        @else
        <center><h1>Hola</h1></center>
        <h3>Calculadora</h3>
        @endif
        <form action="{{ URL::to('/resultado') }}" method="POST">
            @csrf
            Ingresa tu primer número:<br />
            <input type="text" name="num1"><br />
            Ingresa tu segundo número:<br />
            <input type="text" name="num2"><br>
            <br>
            <button class="btn btn-success" name="operador" value="suma">Suma</button>
            <button class="btn btn-danger" name="operador" value="resta">Resta</button>
            <button class="btn btn-info" name="operador" value="multiplicacion">Multiplicacion</button>
            <button class="btn btn-primary" name="operador" value="division">Division</button>
            <input type="reset" value="Borrar">
            <input type="hidden" name="nombre" value="{{ $nombre }}">
        </form>

        @if(isset($resultado))
           <h2>{{ $resultado }}</h2>
        @endif
    @endsection
</html>
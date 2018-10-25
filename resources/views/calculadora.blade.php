<!DOCTYPE html>
<html>
@extends('layout.layout')
    @section('form')
        @if(isset($nombre))
        <div class="d-flex justify-content-center"><h1>Hola {{ $nombre  }}</h1></div>
      <div class="d-flex justify-content-center"><h3>Calculadora de {{ $nombre }}</h3></div>
        @else
        <center><h1>Hola</h1></center>
        <h3>Calculadora</h3>
        @endif
   <br>
     <form action="{{ URL::to('/resultado') }}" method="POST">
            @csrf
        <div class="d-flex justify-content-around">

            <label>Numero 1</label>
            <div class="align-self-center">
                @if(isset($num1))
                <input type="text" name="num1" value="{{ $num1 }}">@else
                 <input type="text" name="num1" placeholder="numero 1">
                 @endif
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <label>Numero 2</label>
            <div class="align-self-center">
                 @if(isset($num2))
                <input type="text" name="num2" value="{{ $num2 }}">@else
                 <input type="text" name="num2" placeholder="numero 2">
                 @endif

            </div>
        </div>

        <div class="d-flex justify-content-center">
        <button class="btn btn-success" name="operador" value="suma">+</button>

        <button class="btn btn-danger" name="operador" value="resta">-</button>

        <button class="btn btn-info" name="operador" value="multiplicacion">*</button>

        <button class="btn btn-primary" name="operador" value="division">/</button>

        <input type="hidden" name="nombre" value="{{ $nombre }}"></div>
       
        </form>
         
        <br>
        @if(isset($resultado))
        <div class="d-flex justify-content-center">
           <h4 style="color: orange">{{ $resultado }}</h4></div>
        @endif
    @endsection
</html>
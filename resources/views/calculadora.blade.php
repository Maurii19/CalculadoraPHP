<!DOCTYPE html>
<html>
@extends('layout.layout')
    @section('form')
        @if(isset($nombre))
      <center><div class="d-flex justify-content-center" style="background-color: #f2f2f2; width: 100%; text-align: center; height: 100px;"><h3 style="margin-top: 40px;">Calculadora de {{ $nombre }}</h3></div></center>
        @else
       <div class="d-flex justify-content-center"> <h3>Calculadora</h3></div>
        @endif
     <form action="{{ URL::to('/resultado') }}" method="POST">
            @csrf

        @if(isset($resultado))
            <br><div class="d-flex justify-content-end"><h4 style="color: blue">{{ $resultado }}</h4></div>
        @elseif(isset($resultado0))
           <div class="d-flex justify-content-end"><h4 style="color: red">#Error: {{ $resultado0 }}</h4></div>
        @elseif(isset($resultadoV))
           <div class="d-flex justify-content-end"><h4 style="color: red">#Error: {{ $resultadoV }}</h4></div>
           @endif

            <div class="d-flex flex-column">
            <div class="p-1"><label>Numero 1</label></div>
            
                @if(isset($num1))
                <div class="p-1"><input type="text" name="num1" value="{{ $num1 }}"></div>@else
                 <div class="p-1"><input type="text" name="num1" placeholder="numero 1"></div>
                 @endif
             </div>
            

        <div class="d-flex flex-column">
            <div class="p-1"><label>Numero 2</label></div>
                 @if(isset($num2))
                <div class="p-1"><input type="text" name="num2" value="{{ $num2 }}"></div>@else
                 <div class="p-1"><input type="text" name="num2" placeholder="numero 2"></div>
                 @endif

            </div>
       

       <div class="d-flex justify-content-sm-between">
        <button class="btn btn-success" name="operador" value="suma">Sumar</button>

        <button class="btn btn-danger" name="operador" value="resta">Restar</button>

        <button class="btn btn-info" name="operador" value="multiplicacion">Multiplicar</button>

        <button class="btn btn-primary" name="operador" value="division">Division</button>

        <input type="hidden" name="nombre" value="{{ $nombre }}"></div>
        </form>
         
        <br>
      

    @endsection
</html>
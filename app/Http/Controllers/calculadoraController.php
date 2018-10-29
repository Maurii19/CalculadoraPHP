<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operaciones;


class calculadoraController extends Controller
{
    
  function getInicio(){
    return view('inicio');
  }

	function setName(Request $request){
		$nombre=$request->input('nombre');
		return view('calculadora', ['nombre'=>$nombre]);
	}

  function getCalculator(){
    	return view('calculadora');
    }
  	
  function postCalculator(Request $request){
      $nombre=$request->input('nombre');
  		$operador =$request->input('operador');
  		$num1 = $request->input('num1');
  		$num2 = $request->input('num2');
  		$resultado = self::realizarOperacion($operador, $num1, $num2);
  		return view('calculadora', ['num1'=>$num1, 'num2'=>$num2, 'resultado'=>$resultado, 'nombre'=>$nombre]);
  	}

    function realizarOperacion($operador, $num1, $num2){
      switch ($operador) {
        case 'suma':
          if(self::isVacio($num1, $num2)){
            return $resultadoV='#Error = Introduce valores para realizar la operacion';
          }else{
           return $resultado=($num1+$num2);
          }
          break;
        case 'resta':
         if(self::isVacio($num1, $num2)){
            return $resultadoV="#Error = Introduce valores para realizar la operacion";
          }else{
           return $resultado=($num1-$num2);
          }
          break;
        case 'multiplicacion':
         if(self::isVacio($num1, $num2)){
            return $resultadoV="#Error = Introduce valores para realizar la operacion";
          }else{
           return $resultado=($num1*$num2);
          }
          break;
        case 'division':
         if(self::isVacio($num1, $num2)){
            return $resultadoV="#Error = Introduce valores para realizar la operacion";
          }
          if (self::is0($num2)){
             return $resultado0="#Error = No puedes dividir entre 0";
          }else{

            return $resultado=($num1/$num2);
          }
          break;

        default:
          $resultado="Error";
          break;
      }
      

    }

  

  function isVacio($num1, $num2){
    if ($num1 == null || $num2==null) {
     return true;
    }
    return false;
  }

  function is0($num){
    if ($num == 0) {
      return true;
      }
      return false;
    }

}

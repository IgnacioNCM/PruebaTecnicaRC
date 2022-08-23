<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /** Funciones con respecto a la tarea 1 Fibonacci
     *  la funcion index muestra el formulario, la funcion Operation realiza el calculo de la serie*/
    public function fibonacciIndex()
    {
        return view('tasks.fibonacci');
    }

    public function fibonacciOperation(Request $request)
    {


        $request->validate([
            'numero' => 'required',
        ]);

        $fibonacci = [0, 1];
        for ($i = 2; $i <= $request->numero; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return view('tasks.fibonacci')->with('series', $fibonacci);
    }

    /** Funciones pertenecientes a la tarea 2 
     *  la funcion index muestra el formulario, la funcion cadenaOp realiza la validacion y inversion de los caracteres*/
    public function cadenaIndex()
    {
        return view('tasks.cadena');
    }

    public function cadenaOp(Request $request)
    {
        $request->validate([
            'cadena' => 'required'
        ]);

        $cadena = $request->cadena;
        $palabraInvertida = '';

        $largo = strlen($cadena) - 1;
        for ($i = 0; $i < strlen($cadena); $i++) {
            $palabraInvertida = $palabraInvertida . $cadena[$largo];
            $largo--;
        }

        return view('tasks.cadena')->with('palabra', $palabraInvertida);
    }

    /** Funciones pertenecientes a la tarea 3
     *  la funcion index muestra el formulario, la funcion cadenaOp realiza la validacion y la multiplicacion*/
    public function multiplicacionIndex()
    {
        return view('tasks.multiplicacion');
    }

    public function multiplicacionOp(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric'
        ]);

        $numero1 = intval($request->numero1);
        $numero2 = intval($request->numero2);

        $resultado = 0;

        if ($numero1 === 0 || $numero2 === 0) {
            $resultado = 0;
        } else {
            $resultado = $numero1 / (1 / $numero2);
        }

        return view('tasks.multiplicacion')->with('resultado', $resultado);
    }

    /** Funciones pertenecientes a la tarea 4
     * la funcion index muestra el formulario, la funcion cadenaOp realiza la validacion y la suma de los numeros primos*/
    public function primosIndex()
    {
        return view('tasks.primos');
    }

    public function primosOp(Request $request)
    {
        $request->validate([
            'primos' => 'required'
        ]);
        $numerosArr = explode(',', $request->primos);
        $largo = count($numerosArr) - 1;
        if ($numerosArr[$largo] === "") {
            $numerosArr[$largo] = 0;
        }
        if ($numerosArr[0] === "") {
            $numerosArr[0] = 0;
        }

        $resultado = 0;

        for ($i = 0; $i <= $largo; $i++) {
            if ($this->esPrimo($numerosArr[$i])) {
                $resultado += $numerosArr[$i];
            }
        }

        return view('tasks.primos')->with('resultado', $resultado);
    }
    //funcion verifica si el numero es primo o no
    public function esPrimo($numero)
    {
        if ($numero == 1) {
            return false;
        }

        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0 && $i != 1) {
                return false;
            }
        }
        return true;
    }
}

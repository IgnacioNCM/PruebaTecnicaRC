@extends('layouts.plantilla')

@section('title','primos')
    @section('content')        
        <div class="card container">
            <div class="card-header bg-primary text-white">
                <h1>Numeros Primos</h1>
            </div>
            <div class="container mt-3 card-body">            
                <form action="{{route('tasks.primosOp')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label>
                            Ingrese el arreglo de la siguiente manera EJ: <strong>1,2,3,4</strong>  
                            ,Sin ingresar espacios o puntos o cualquier otro simbolo.                        
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label>
                            Ingrese el arreglo a calcular:                             
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" name="primos" min="0" pattern="^[\d]*(?:,[\d]*)*$">
                    </div>
                    @error('primos')
                        <br>
                        <small>*{{$message}} </small>
                        <br>
                    @enderror
                    <button class="btn btn-primary" type="submit">Enviar Números</button>
                </form>

                <div class="mb-3 mt-3">
                    @if (!empty($resultado))
                        <p>El resultado de la suma es: <strong>{{$resultado}}</strong></p>
                    @endif 
                </div>                
            </div>
            <div class="card-footer ">
                <a class="btn btn-warning" href="{{route('menu')}}">Volver al menú</a> 
            </div>
        </div>
@endsection
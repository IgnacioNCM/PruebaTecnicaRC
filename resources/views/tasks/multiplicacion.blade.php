@extends('layouts.plantilla')

@section('title','Fibonacci ')
    @section('content')        
        <div class="card container">
            <div class="card-header bg-primary text-white">
                <h1>Multiplicación</h1>
            </div>
            <div class="container mt-3 card-body">            
                <form action="{{route('tasks.multiplicacionOp')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label>
                            Ingrese Primer Número: 
                            
                        </label>
                    </div>
                    <div>
                        <input type="number" name="numero1">
                        @error('numero1')
                            <br>
                            <small>*{{$message}} </small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label>
                            Ingrese Segundo Número:                            
                        </label>
                    </div>
                    <div>
                        <input type="number" name="numero2">
                        @error('numero2')
                            <br>
                            <small>*{{$message}} </small>
                            <br>
                        @enderror
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Enviar Número</button>
                </form>
                <div class="mb-3 mt-3">
                    @if (isset($resultado))
                        <p>El resultado de la multiplicación es: <strong>{{$resultado}}</strong></p>
                    @endif 
                </div>                
            </div>
            <div class="card-footer">
                <a class="btn btn-warning" href="{{route('menu')}}">Volver al menú</a> 
            </div>
        </div>
@endsection
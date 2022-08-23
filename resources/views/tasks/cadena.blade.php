@extends('layouts.plantilla')

@section('title','Fibonacci ')
    @section('content')        
        <div class="card container">
            <div class="card-header bg-primary text-white">
                <h1>Invertir cadena de texto</h1>
            </div>
            <div class="container mt-3 card-body">            
                <form action="{{route('tasks.cadenaOp')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label>
                            Ingrese una cadena de texto:
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="input" name="cadena" min="0">                    
                    @error('cadena')
                        <br>
                        <small>*{{$message}} </small>
                        <br>
                    @enderror
                    </div>                    
                    <button class="btn btn-primary" type="submit">Enviar Cadena</button>
                </form>
                <div class="mb-3 mt-3">
                    @if (!empty($palabra))
                        <p>El resultado de la cadena invertida es: </p>
                        <strong>{{$palabra}} </strong>                     
                    @endif 
                </div>                
            </div>
            <div class="card-footer">
                <a class="btn btn-warning" href="{{route('menu')}}">Volver al menú</a> 
            </div>
        </div>
@endsection
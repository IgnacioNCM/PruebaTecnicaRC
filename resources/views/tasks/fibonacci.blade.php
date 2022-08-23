@extends('layouts.plantilla')

@section('title','Fibonacci ')
    @section('content')
    <div class="card container">
        <div class="card-header bg-primary text-white">
            <h1>Serie de Fibonacci</h1>
        </div>
        <div class="container mt-3 card-body">            
            <form action="{{route('tasks.fibonacciOperation')}}" method="POST">
                @csrf
                <div  class="mb-3 mt-3">
                    <label>
                        Ingrese Número para calcular la serie de Fibonacci:                         
                    </label>
                </div>
                <div class="mb-3 mt-3">
                    <input type="number" name="numero" min="0">    
                    @error('numero')
                        <br>
                        <small style="color: red">*{{$message}} </small>
                        <br>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Enviar Número</button>
            </form>
            <div class="mb-3 mt-3">
                @if (!empty($series))
                    <p>El resultado de la serie es: </p>
                    @foreach ($series as $serie)
                        <strong>{{$serie}}</strong>
                    @endforeach
                @endif   
            </div>
                        
        </div>
        <div class="card-footer">
            <a class="btn btn-warning" href="{{route('menu')}}">Volver al menú</a> 
        </div>
    </div>
    
    

@endsection
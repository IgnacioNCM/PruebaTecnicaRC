@extends('layouts.plantilla')

@section('title','Menú ')
    @section('content')
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Test RedCapital</h1>
        <p>Bienvenidos al Menú de Tareas, seleccione una de las siguientes tareas</p>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="row" >
                <div class="col-sm-6 card-body">
                    <p class="card-text lead"><strong>Serie Fibonacci</strong></p>
                    <a href="{{route('tasks.fibonacci')}}" class="btn btn-primary">Task 1</a>
                </div>
                <div class="col-sm-6 card-body">
                    <p class="card-text lead"><strong> Invertir Caracteres Cadena de Texto</strong></p>                    
                    <a href="{{route('tasks.cadena')}}" class="btn btn-primary">Task 2</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6 card-body">
                    <p class="card-text lead"><strong>Multiplicar Números</strong></p>
                    <a href="{{route('tasks.multiplicacion')}}" class="btn btn-primary">Task 3</a>
                </div>
                <div class="col-sm-6 card-body">
                    <p class="card-text lead"><strong> Suma de N° Primos de un Arreglo</strong></p>
                    <a href="{{route('tasks.primos')}}" class="btn btn-primary" >Task 4</a>
                </div>
            </div>
        </div>              
    </div>
@endsection


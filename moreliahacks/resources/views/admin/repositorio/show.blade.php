@extends('layouts.master')

@section('content')

    <h1>Repositorio</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Descripcion</th><th>Autores</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $repositorio->id }}</td> <td> {{ $repositorio->nombre }} </td><td> {{ $repositorio->descripcion }} </td><td> {{ $repositorio->autores }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
@extends('layouts.master')

@section('content')

    <h1>Repositorios <a href="{{ route('repositorio.create') }}" class="btn btn-primary pull-right btn-sm">Add New Repositorio</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre</th><th>Descripcion</th><th>Autores</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($repositorios as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/repositorio', $item->id) }}">{{ $item->nombre }}</a></td><td>{{ $item->descripcion }}</td><td>{{ $item->autores }}</td>
                    <td>
                        <a href="{{ route('repositorio.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['repositorio.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $repositorios->render() !!} </div>
    </div>

@endsection

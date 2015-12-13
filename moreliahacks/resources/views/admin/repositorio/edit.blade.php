@extends('layouts.master')

@section('content')

    <h1>Edit Repositorio</h1>
    <hr/>

    {!! Form::model($repositorio, [
        'method' => 'PATCH',
        'route' => ['repositorio.update', $repositorio->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('autores') ? 'has-error' : ''}}">
                {!! Form::label('autores', 'Autores: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('autores', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('autores', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_publicacion') ? 'has-error' : ''}}">
                {!! Form::label('fecha_publicacion', 'Fecha Publicacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_publicacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_publicacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
                {!! Form::label('link', 'Link: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('link', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('etiquetas') ? 'has-error' : ''}}">
                {!! Form::label('etiquetas', 'Etiquetas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('etiquetas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('etiquetas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('inputs') ? 'has-error' : ''}}">
                {!! Form::label('inputs', 'Inputs: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('inputs', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('inputs', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('outputs') ? 'has-error' : ''}}">
                {!! Form::label('outputs', 'Outputs: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('outputs', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('outputs', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lenguaje_backend') ? 'has-error' : ''}}">
                {!! Form::label('lenguaje_backend', 'Lenguaje Backend: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lenguaje_backend', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lenguaje_backend', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lenguaje_frontend') ? 'has-error' : ''}}">
                {!! Form::label('lenguaje_frontend', 'Lenguaje Frontend: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lenguaje_frontend', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lenguaje_frontend', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
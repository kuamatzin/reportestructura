@extends('layouts.app')

@section('content')
    <div class="container mb-5 pd-5">
        <div class="col-md-6 offset-md-3 mb-5 pd-5">
            <h3>Registrar nueva reunión</h3>
            <hr>
            {!! Form::open(['url' => '/meetings']) !!}

                <div class="form-group{{ $errors->has('municipality') ? ' has-error' : '' }}">
                    {!! Form::label('municipality', 'Municipio') !!}
                    {!! Form::select('municipality', [0 => 'Huauchinango', 1 => 'Zacatlán', 2 => 'Teziutlán', 3 => 'Ajalpan', 4 => 'San Martín Tezmelucán', 5 => 'Puebla', 6 => 'Tepeaca', 7 => 'Chalchicomula de Sesma', 8 => 'Cholula', 9 => 'Atlixco', 10 => 'Acatlán', 11 => 'Tehuacán'], null, ['id' => 'municipality', 'class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('municipality') }}</small>
                </div>

                <div class="form-group{{ $errors->has('responsible') ? ' has-error' : '' }}">
                    {!! Form::label('responsible', 'Persona responsable') !!}
                    {!! Form::text('responsible', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">{{ $errors->first('responsible') }}</small>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    {!! Form::label('phone', 'Teléfono') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                </div>

                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    {!! Form::label('location', 'Dirección') !!}
                    {!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('location') }}</small>
                </div>

                <div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
                    {!! Form::label('neighborhood', 'Colonia') !!}
                    {!! Form::text('neighborhood', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('neighborhood') }}</small>
                </div>

                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    {!! Form::label('date', 'Fecha') !!}
                    {!! Form::date('date', Carbon\Carbon::now('America/Mexico_City'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('date') }}</small>
                </div>

                <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                    {!! Form::label('time', 'Hora') !!}
                    {!! Form::time('time', Carbon\Carbon::now('America/Mexico_City')->format('H:i'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('time') }}</small>
                </div>

                <div class="form-group{{ $errors->has('assistans') ? ' has-error' : '' }}">
                    {!! Form::label('assistans', 'Número de asistentes') !!}
                    {!! Form::text('assistans', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('assistans') }}</small>
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    {!! Form::label('status', 'Estatus') !!}
                    {!! Form::select('status', [1 => 'Realizada', 2 => 'Programada'], null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('status') }}</small>
                </div>

                {!! Form::submit('Guardar', ['class' => 'btn btn-info float-right']) !!}

            {!! Form::close() !!}
            <br><br><br>
        </div>
    </div>
@endsection
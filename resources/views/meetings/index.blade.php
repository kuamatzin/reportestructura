@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3>Listado de reuniones</h3>
                
                <a href="/meetings/create">
                    <button type="button" class="btn btn-success float-right">Registrar nueva reunión</button>
                </a>
                <br><br><br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Colonia</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Asistentes</th>
                            <th scope="col">Status</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                  <tbody>
                    @foreach($meetings as $key => $meeting)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$meeting->municipality}}</td>
                            <td>{{$meeting->responsible}}</td>
                            <td>{{$meeting->phone}}</td>
                            <td>{{$meeting->location}}</td>
                            <td>{{$meeting->neighborhood}}</td>
                            <td>{{$meeting->date}}</td>
                            <td>{{$meeting->time}}</td>
                            <td>{{$meeting->assistans}}</td>
                            <td>{{$meeting->status}}</td>
                            <td>
                                <a href="/meetings/{{$meeting->id}}/edit">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['url' => '/meetings/' . $meeting->id]) !!}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
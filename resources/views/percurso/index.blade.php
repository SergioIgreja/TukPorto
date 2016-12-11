@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(Session::has('message'))
                    <div class="alert alert-success"> {{Session::get('message')}}</div>
                @endif
                <div class="panel-heading">Percursos</div>

                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Criador</th>
                        <th>Ação</th>
                    </tr>
                    @foreach($percursos as $percurso)
                        <tr>
                            <td>{{link_to_route('percurso.show',$percurso->name,[$percurso->id]) }}</td>
                            <td>{{$percurso->descricao}}</td>
                            @foreach($users as $user)
                                @if($user->id == $percurso->idEditor)
                                    <td>{{$user->email}}</td>
                                    @if($percurso->idEditor == $logged_user->id)
                                        <td>{!! Form::open(array('route'=>['percurso.destroy', $percurso->id], 'method'=>'DELETE')) !!}
                                            {{link_to_route('percurso.edit','Editar',[$percurso->id],['class'=>'btn btn-primary'])}}
                                            |
                                            {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    @endif
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
    {{link_to_route('percurso.create','Novo Percurso',null,['class'=>'btn btn-primary'])}}
</div>
@endsection

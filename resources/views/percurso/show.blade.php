@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$percurso->name}}</div>

                <div class="panel-body">
                    Id do Percurso = {{$percurso->id}}
                </div> 
                <div class="panel-body">
                    Id do criador = {{$percurso->idEditor}}
                </div>
                 <div class="panel-body">
                    Descrição = {{$percurso->descricao}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

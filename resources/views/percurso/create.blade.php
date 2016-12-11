@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Percurso</div>

                <div class="panel-body">
                    {!!Form::open(array('route'=>'percurso.store'))!!}
                        <div class="form-group">
                            {!! Form::label('name','Insira nome') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('idEditor','Insira o seu id') !!}
                            {!! Form::text('idEditor',null,['class'=>'form-control']) !!}
                        </div>  
                        <div class="form-group">
                            {!! Form::label('descricao','Insira descrição') !!}
                            {!! Form::text('descricao',null,['class'=>'form-control']) !!}
                        </div>       

                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}                                      

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
   
        <ul class="aler alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
   
    </div>
</div>
@endsection
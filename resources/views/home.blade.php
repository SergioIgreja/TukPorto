@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <div>
                    <h1>Os meus Percursos</h1>
                    <ul>
                        @foreach($percursos as $p)
                        @if($user->id == $p->idEditor)
                        <li>{{$p->name}}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

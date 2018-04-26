@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
                    <strong>Статус БСМТ</strong>
                </div>    
                <div class="well">
                    <strong>Статус: </strong>{{ $sbsmt->status }}
                </div>
            </div>
            <center>
                <a class="btn btn-primary" href="{{ route('store_sbsmt_path') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Назад в список</a>
            </center>        
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    <strong>Информация об активном транспорте</strong>
                </div>
                <div class="well">
                    <strong>Заказчик: </strong>{{ $atransport->customers ? $atransport->customers->customer:'Данных нет'  }} <br>
                    <strong>Транспорт: </strong>{{ $atransport->transports ? $atransport->transports->model:''}} | {{ $atransport->transports ? $atransport->transports->govnumber:'Данных нет' }}<br>
                    <strong>Статус </strong>{{$atransport->states ? $atransport->states->name_state:'Данных нет' }}<br>
                    {{--  <strong>Заказчик: </strong>{{ $transport->customers ? $transport->customers->customer:'Данных нет' }}   --}}
                    <br><br><p><b>Добавлено {{ $atransport->created_at->diffForHumans() }}</b></p>
                </div>
            
              
            </div>
        <center>
            <a class="btn btn-primary" href="{{ route('store_transport_active_path') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Назад</a>
        </center>    
        </div>
    </div>
</div>
@endsection
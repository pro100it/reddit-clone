@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    <strong>Информация о транспорте</strong>
                </div>
                <div class="well">
                    <strong>Модель: </strong>{{ $transport->model }} <br>
                    <strong>Государственный номер: </strong>{{ $transport->govnumber }}<br>
                    <strong>Блок БСМТ: </strong>{{$transport->bsmts ? $transport->bsmts->modelnumber:'Данных нет' }}<br>
                    {{--  <strong>Заказчик: </strong>{{ $transport->customers ? $transport->customers->customer:'Данных нет' }}   --}}
                    <br><br><p><b>Добавлено {{ $transport->created_at->diffForHumans() }}</b></p>
                </div>
            
              
            </div>
        <center>
            <a class="btn btn-primary" href="{{ route('store_transport_path') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Назад</a>
        </center>    
        </div>
    </div>
</div>
@endsection
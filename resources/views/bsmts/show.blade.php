@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    <strong>Информация о блоке БСМТ</strong>
                </div>
                <div class="well">
                    <strong>Производитель:</strong> {{ $bsmt->vbsmts ? $bsmt->vbsmts->vendorname:'Нет данных' }}<br>
                    <strong>Номер БСМТ:</strong> {{ $bsmt->modelnumber }}<br>
                    <strong>IMEI БСМТ</strong> {{ $bsmt->modelimei }}<br>
                    <strong>Статус:</strong> {{ $bsmt->sbsmts ? $bsmt->sbsmts->status:'Данных нет' }}
                </div>
            </div>        
             <center>
                 <a class="btn btn-primary" href="{{ route('store_bsmt_path') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Назад в список</a>
             </center>
        </div>
    </div>
</div>    
    
@endsection
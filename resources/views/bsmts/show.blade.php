@extends('layouts.app')

@section('content')
<hr>

     <div class="row">
        <div class="table-responsive">
            <h2><b>Информация о блоке БСМТ</b></h2>
            <br>
            <br>
            <table class="table table-borderless">
                <thead>
                    <tr class="bg-primary">
                        <th>Модель</th>
                        <th>Номер БСМТ</th>
                        <th>IMEI БСМТ</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $bsmt->vbsmts ? $bsmt->vbsmts->vendorname:'Нет данных' }}</td>
                        <td>{{ $bsmt->modelnumber }}</td>    
                        <td>{{ $bsmt->modelimei }}</td>
                        <td>{{ $bsmt->sbsmts ? $bsmt->sbsmts->status:'Данных нет' }}</td>
                    </tr>
                </tbody>
            </table>
        </tr>  
        </div>
    </div>
    <hr>
    <a class="btn btn-primary" href="{{ route('store_bsmt_path') }}">Назад в список</a>
@endsection
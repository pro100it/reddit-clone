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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $bsmt->model }}</td>
                        <td>{{ $bsmt->modelnumber }}</td>    
                        <td>{{ $bsmt->modelimei }}</td>
                    </tr>
                </tbody>
            </table>
        </tr>   
        </div>
    </div>
    <hr>
@endsection
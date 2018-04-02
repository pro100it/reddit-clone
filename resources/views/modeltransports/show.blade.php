@extends('layouts.app')

@section('content')
<hr>

     <div class="row">
        <div class="table-responsive">
            <h2><b>Информация о моделе транспорта</b></h2>
            <br>
            <br>
            <table class="table table-borderless">
                <thead>
                    <tr class="bg-primary">
                        <th>Модель</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $modeltransport->model_name }}</td>
                    </tr>
                </tbody>
            </table>
        </tr>   
        </div>
    </div>
    <hr>
@endsection
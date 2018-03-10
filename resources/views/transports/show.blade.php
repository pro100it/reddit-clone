@extends('layouts.app')

@section('content')
<hr>

     <div class="row">
        <div class="table-responsive">
            <h2><b>Информация о транспортном средстве</b></h2>
            <br>
            <br>
            <table class="table table-borderless">
                <thead>
                    <tr class="bg-primary">
                        <th>Модель</th>
                        <th>Государственный номер</th>
                        <th>Блок БСМТ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $transport->model }}</td>
                        <td>{{ $transport->govnumber }}</td>    
                        <td>{{ $transport->blockbsmt }}</td>
                    </tr>
                </tbody>
            </table>
            
            <p><b>Добавлено {{ $transport->created_at->diffForHumans() }}</b></p>
        </tr>   
        </div>
    </div>
    <hr>
@endsection
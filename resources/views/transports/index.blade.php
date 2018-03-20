@extends('layouts.app')

@section('content')
    
<div class="col-md-8 col-md-offset-2">
    <div class="row">
        @auth
        <div style="text-align: right">  
            <a class="btn btn-default btn-sm" href="{{ route('create_transport_path') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true">Добавить</span></a>
        </div>
        @endauth
        <div class="table-responsive">
            <table class="table table-border">
                <thead>
                    <tr class="bg-primary">
                        <th>Модель</th>
                        <th>Государственный номер</th>
                        <th>Блок БСМТ</th>
                        <th>Заказчик</th>
                        @auth
                          <th>Действия</th>
                        @endauth
                    </tr>
                </thead>
                @foreach($transports as $transport)
                <tbody>
                    <tr>
                        <td><a href="{{ route('transport_path', ['transport' => $transport->id]) }}">{{ $transport->model }}</a></td>    
                        <td>{{$transport->govnumber }}</td>
                        <td>{{$transport->bsmts ? $transport->bsmts->modelnumber:'Данных нет' }}</td>
                        <td>{{$transport->customers ? $transport->customers->customer:'Данных нет' }}</td>
                        @auth        
                          <td align="right">
                            <form action="{{ route('delete_transport_path', ['transport' => $transport->id]) }}" method="POST">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('edit_transport_path', ['transport' => $transport->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
                                </div>    
                               </form>
                           </td>    
                        @endauth
                    </tr>
                </tbody> 
                @endforeach
            </table>
                
        </div>
    </div>
</div>        
@endsection
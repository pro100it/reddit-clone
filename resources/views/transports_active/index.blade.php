@extends('layouts.app')

@section('content')
    
<div class="col-md-8 col-md-offset-2">
    <div class="row">
        @auth
        <div style="text-align: right">  
            <a class="btn btn-default btn-sm" href="{{ route('create_transport_active_path') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true">Добавить</span></a>
        </div>
        @endauth
        <div class="table-responsive">
            <table class="table table-border">
                <thead>
                    <tr class="bg-primary">
                        <th>№ п/п </th>
                        <th>Заказчик</th>
                        <th>Транспорт</th>
                        <th>Статус</th>
                        {{--  <th>Заказчик</th>  --}}
                        @auth
                          <th>Действия</th>
                        @endauth
                    </tr>
                </thead>
                @foreach($atransports as $t)
                <tbody>
                    <tr>
                        <td><a href="{{ route('transport_active_path', ['t' => $t->id]) }}">Открыть</a></td>    
                        <td>{{$t->customers ? $t->customers->customer:'Данных нет' }}</td>
                        <td>{{$t->transports ? $t->transports->model:'' }} | {{$t->transports ? $t->transports->govnumber:'Данных нет' }}</td>
                        <td>{{$t->states ? $t->states->name_state:'Данных нет' }}</td> 
                        @auth        
                          <td align="right">
                            <form action="{{ route('delete_transport_active_path', ['t' => $t->id]) }}" method="POST">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('edit_transport_active_path', ['t' => $t->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
                                </div>    
                               </form>
                           </td>    
                        @endauth
                    </tr>
                    <tr class="bg-warning">
                        <td colspan="5">{{$t->info ? $t->info:'Данных нет' }}
                    </tr>    
                </tbody> 
                @endforeach
            </table>
                
        </div>
    </div>
</div>        
@endsection
@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
  <div class="row">
    <div style="text-align: right">  
        <a class="btn btn-default btn-sm" href="{{ route('create_bsmt_path') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true">Добавить</span></a>
    </div>
    <div class="table-responsive">
                <table class="table table-border">
                     <thead>
                        <tr class="bg-primary">
                            <th>Модель</th>
                            <th>Номер модели</th>
                            <th>IMEI</th>
                            <th>Статус</th>
                            @if (Auth::guest())
                            @else
                            <th>Действия</th>
                            @endif
                        </tr>
                    </thead>
     @foreach($bsmts as $bsmt)
        <tbody>
             <tr>
                <td><a href="{{ route('bsmt_path', ['bsmt' => $bsmt->id]) }}">{{ $bsmt->vbsmts->vendorname }}</a></td>    
                <td>{{ $bsmt->modelnumber }}</td>
                <td>{{ $bsmt->modelimei }}</td>
                <td>{{ $bsmt->sbsmts ? $bsmt->sbsmts->status:'Данных нет' }}</td>
                @auth
                    <td align="right">
                    <form action="{{ route('delete_bsmt_path', ['bsmt' => $bsmt->id]) }}" method="POST">
                        <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('edit_bsmt_path', ['bsmt' => $bsmt->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                       
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
</div>
</div>
</div>
 
@endsection                
                
        

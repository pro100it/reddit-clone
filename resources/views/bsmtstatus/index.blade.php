@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
  <div class="row">
    <div style="text-align: right">  
        <a class="btn btn-default btn-sm" href="{{ route('create_sbsmt_path') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true">Добавить</span></a>
    </div>
      <div class="table-responsive">
        <table class="table table-border">
            <thead>
                <tr class="bg-primary">
                    <th>Статус</th>
                    @Auth
                    <th style="text-align:right">Действия</th>
                    @endauth
                </tr>
            </thead>
                    
    @foreach($sbsmts as $sbsmt)
        <tbody>
            <tr>
                <td><a href="{{ route('sbsmt_path', ['sbsmt' => $sbsmt->id]) }}">{{ $sbsmt->status }}</a></td>    
                @Auth
                    <td align="right">
                        <form action="{{ route('delete_sbsmt_path', ['sbsmt' => $sbsmt->id]) }}" method="POST">
                            <div class="btn-group btn-group-sm" role="group">    
                            <a href="{{ route('edit_sbsmt_path', ['sbsmt' => $sbsmt->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
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
                
        

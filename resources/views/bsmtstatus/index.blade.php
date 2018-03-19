@extends('layouts.app')

@section('content')

<div class="row">
            <div class="table-responsive">
                <table class="table table-border">
                     <thead>
                        <tr class="bg-primary">
                            <th>Статус</th>
                            @if (Auth::guest())
                            @else
                            <th>Действия</th>
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    
     @foreach($sbsmts as $sbsmt)
        <tbody>
             <tr>
                <td><a href="{{ route('sbsmt_path', ['sbsmt' => $sbsmt->id]) }}">{{ $sbsmt->status }}</a></td>    
                @if (Auth::guest())
                @else        
                    <td class="col-xs-1">
                        <a href="{{ route('edit_sbsmt_path', ['sbsmt' => $sbsmt->id]) }}" class="btn btn-info">Изменить</a>
                    </td>
                    <td class="col-xs-1"> 
                       <form action="{{ route('delete_sbsmt_path', ['sbsmt' => $sbsmt->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                           <button type="submit" class='btn btn-danger btn-small'>&nbsp;Удалить&nbsp;&nbsp;</button>
                       </form>
                    </td>    
                @endif
             </tr>
                       
        </tbody>
     @endforeach
    
</div>

 
@endsection                
                
        

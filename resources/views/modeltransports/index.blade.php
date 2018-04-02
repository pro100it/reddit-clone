@extends('layouts.app')

@section('content')

<div class="row">
            <div class="table-responsive">
                <table class="table table-border">
                     <thead>
                        <tr class="bg-primary">
                            <th>Марка ТС</th>
                            @if (Auth::guest())
                            @else
                            <th>Действия</th>
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    
     @foreach($modeltransports as $s)
        <tbody>
             <tr>
                <td><a href="{{ route('modeltransport_path', ['modeltransport' => $s->id]) }}">{{ $s->model_name }}</a></td>    
                @if (Auth::guest())
                @else        
                    <td class="col-xs-1">
                        <a href="{{ route('edit_modeltransport_path', ['modeltransport' => $s->id]) }}" class="btn btn-info">Изменить</a>
                    </td>
                    <td class="col-xs-1"> 
                       <form action="{{ route('delete_modeltransport_path', ['modeltransport' => $s->id]) }}" method="POST">
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
                
        

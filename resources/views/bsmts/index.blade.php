@extends('layouts.app')

@section('content')

<div class="row">
            <div class="table-responsive">
                <table class="table table-border">
                     <thead>
                        <tr class="bg-primary">
                            <th>Модель</th>
                            <th>Номер модели</th>
                            <th>IMEI</th>
                            @if (Auth::guest())
                            @else
                            <th>Действия</th>
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    
     @foreach($bsmts as $bsmt)
        <tbody>
             <tr>
                <td><a href="{{ route('bsmt_path', ['bsmt' => $bsmt->id]) }}">{{ $bsmt->vbsmts->vendorname }}</a></td>    
                <td>{{ $bsmt->modelnumber }}</td>
                <td>{{ $bsmt->modelimei }}</td>
                @if (Auth::guest())
                @else        
                    <td class="col-xs-1">
                        <a href="{{ route('edit_bsmt_path', ['bsmt' => $bsmt->id]) }}" class="btn btn-info">Изменить</a>
                    </td>
                    <td class="col-xs-1"> 
                       <form action="{{ route('delete_bsmt_path', ['bsmt' => $bsmt->id]) }}" method="POST">
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
                
        

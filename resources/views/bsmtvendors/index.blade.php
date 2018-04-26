@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="row">
        @auth
        <div style="text-align: right">  
            <a class="btn btn-default btn-sm" href="{{ route('create_vbsmt_path') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true">Добавить</span></a>
        </div>
        @endauth
            <div class="table-responsive">
                <table class="table table-border">
                     <thead>
                        <tr class="bg-primary">
                            <th>Производитель</th>
                            @if (Auth::guest())
                            @else
                            <th style="text-align:right">Действия</th>
                           
                            @endif
                        </tr>
                    </thead>
                    
     @foreach($vbsmts as $vbsmt)
        <tbody>
             <tr>
                <td><a href="{{ route('vbsmt_path', ['vbsmt' => $vbsmt->id]) }}">{{ $vbsmt->vendorname }}</a></td>    
                @auth
                    <td align="right"> 
                       <form action="{{ route('delete_vbsmt_path', ['vbsmt' => $vbsmt->id]) }}" method="POST">
                            <div class="btn-group btn-group-sm" role="group">    
                                 <a href="{{ route('edit_vbsmt_path', ['vbsmt' => $vbsmt->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>                                
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

 
@endsection                
                
        

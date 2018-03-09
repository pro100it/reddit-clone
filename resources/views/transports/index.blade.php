@extends('layouts.app')

@section('content')
    
        <div class="row">
            <div class="table-responsive">
                <table class="table table-border">
                     <thead>
                        <tr class="bg-primary">
                            <th>Модель</th>
                            <th>Государственный номер</th>
                            <th>Блок БСМТ</th>
                            @if (Auth::guest())
                            @else
                            <th>Действия</th>
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    @foreach($transports as $transport)
                    <tbody>
                        <tr>
                            <td><a href="{{ route('transport_path', ['transport' => $transport->id]) }}">{{ $transport->model }}</a></td>    
                            <td>{{ $transport->govnumber }}</td>
                            <td>{{ $transport->blockbsmt }}</td>
                            @if($transport->wasCreatedBy( Auth::user() ))        
                            <td class="col-xs-1">
                            <a href="{{ route('edit_transport_path', ['transport' => $transport->id]) }}" class="btn btn-info">Изменить</a>
                            </td>
                            <td class="col-xs-1"> 
                            <form action="{{ route('delete_transport_path', ['transport' => $transport->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class='btn btn-danger btn-small'>&nbsp;Удалить&nbsp;&nbsp;</button>
                               </form>
                            </td>    
                            @endif
                        </tr>
                       <!--<tr>
                            <td><p>Posted {{ $transport->created_at->diffForHumans() }} by <b>{{ $transport->user->name }}</b></p></td>
                            <td></td>
                            <td></td>
                            <td class="col-xs-1"></td>
                            <td class="col-xs-1"></td>
                        </tr>-->
                    </tbody> 
                    
                    @endforeach
                </table>
                
            </div>
        </div>
        
    

    {{ $transports->render() }}
@endsection
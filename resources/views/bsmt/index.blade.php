@extends('layouts.app')

@section('content')
<div class="form-group">
    <select class="form-control input-sm" name="category" id="category">
     @foreach($bsmts as $d)
        <option value="{{$d->id}}">{{$d->modelnumber}}</option>
     @endforeach
    </select>
</div>

 
@endsection                
                
        

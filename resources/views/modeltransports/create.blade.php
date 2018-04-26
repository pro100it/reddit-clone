@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <h2>Добавление модели транспорта</h2>
    @include('modeltransports._form', ['modeltransport' => $modeltransport])
</div>    
@endsection
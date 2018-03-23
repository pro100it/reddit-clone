@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <h2>Редактирование транспорта</h2>
    @include('transports._form', ['transport' => $transport])
</div>    
@endsection
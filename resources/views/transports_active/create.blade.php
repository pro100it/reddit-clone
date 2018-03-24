@extends('layouts.app')


@section('content')
<div class="col-md-8 col-md-offset-2">
    <h2>Добавление транспорта в учет</h2>
    @include('transports_active._form', ['atransport' => $atransport])
</div>    
@endsection
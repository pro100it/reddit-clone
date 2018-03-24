@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <h2>Редактирование транспорта в учете</h2>
    @include('transports_active._form', ['atransport' => $atransport])
</div>    
@endsection
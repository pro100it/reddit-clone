@extends('layouts.app')

@section('content')
    <h2>Редактирование транспорта</h2>
    @include('transports._form', ['transport' => $transport])
@endsection
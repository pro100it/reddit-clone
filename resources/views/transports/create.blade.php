@extends('layouts.app')

@section('content')
@include('include_home.sidebar')
    <h2>Добавление транспорта</h2>
    @include('transports._form', ['transport' => $transport])
@endsection
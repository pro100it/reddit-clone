@extends('layouts.app')

@section('content')
    <h2>Добавление транспорта</h2>
    @include('transports._form', ['transport' => $transport])
@endsection
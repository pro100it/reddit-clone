@extends('layouts.app')

@section('content')
    <h2>Редактирование производителя БСМТ</h2>
    @include('modeltransports._form', ['modeltransport' => $modeltransport])
@endsection
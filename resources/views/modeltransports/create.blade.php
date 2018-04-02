@extends('layouts.app')

@section('content')

    <h2>Добавление производителя БСМТ</h2>
    @include('modeltransports._form', ['modeltransport' => $modeltransport])
@endsection
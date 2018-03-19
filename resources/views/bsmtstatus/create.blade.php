@extends('layouts.app')

@section('content')

    <h2>Добавление статуса БСМТ</h2>
    @include('bsmtstatus._form', ['sbsmt' => $sbsmt])
@endsection
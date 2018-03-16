@extends('layouts.app')

@section('content')

    <h2>Добавление производителя БСМТ</h2>
    @include('bsmtvendors._form', ['vbsmt' => $vbsmt])
@endsection
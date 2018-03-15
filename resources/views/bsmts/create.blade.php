@extends('layouts.app')

@section('content')

    <h2>Добавление блока БСМТ</h2>
    @include('bsmts._form', ['bsmt' => $bsmt])
@endsection
@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <h2>Добавление производителя БСМТ</h2>
    @include('bsmtvendors._form', ['vbsmt' => $vbsmt])
</div>    
@endsection
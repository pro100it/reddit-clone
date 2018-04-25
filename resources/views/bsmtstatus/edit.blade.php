@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <h2>Редактирование статуса БСМТ</h2>
    @include('bsmtstatus._form', ['sbsmt' => $sbsmt])
</div>    
@endsection
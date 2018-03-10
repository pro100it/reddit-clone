@if( $transport->exists )
    <form action="{{ route('update_transport_path', ['transport' => $transport->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_transport_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    <!-- Title Field -->
    <div class="form-group">
        <label for="model">Модель:</label>
        <input type="text" name="model" class="form-control" value="{{ $transport->model or old('model') }}"/>
    </div>

    <!-- Description Input -->
    <div class="form-group">
        <label for="govnumber">Государственный номер:</label>
        <input type="text" name="govnumber" class="form-control" value="{{ $transport->govnumber or old('govnumber') }}"/>
    </div>
    
    <div class="form-group">
        <label for="blockbsmt">Блок БСМТ:</label>
        <select name="blockbsmt" class="form-control" value="{{ $bsmts->name }}"/>
    </div>
    
    <div class="form-group">
        <button type="submit" class='btn btn-primary'>Сохранить запись</button>
    </div>
</form>
@if( $modeltransport->exists )
    <form action="{{ route('update_modeltransport_path', ['modeltransport' => $modeltransport->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_modeltransport_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    <!-- Title Field -->
    <div class="form-group">
        <label for="model_name">Модель транспорта</label>
        <input type="text" name="model_name" class="form-control" value="{{ $modeltransport->model_name or old('model_name') }}"/>
    </div>
    
    <div class="form-group">
        <button type="submit" class='btn btn-primary'>Сохранить запись</button>
    </div>
</form>
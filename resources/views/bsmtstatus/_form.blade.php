@if( $sbsmt->exists )
    <form action="{{ route('update_sbsmt_path', ['sbsmt' => $sbsmt->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_sbsmt_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    <!-- Title Field -->
    <div class="form-group">
        <label for="status">Статус БСМТ:</label>
        <input type="text" name="status" class="form-control" value="{{ $sbsmt->status or old('status') }}"/>
    </div>
    
    <div class="form-group">
        <button type="submit" class='btn btn-primary'>Сохранить запись</button>
    </div>
</form>
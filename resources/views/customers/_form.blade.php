@if( $vbsmt->exists )
    <form action="{{ route('update_vbsmt_path', ['vbsmt' => $vbsmt->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_vbsmt_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    <!-- Title Field -->
    <div class="form-group">
        <label for="vendorname">Производитель БСМТ:</label>
        <input type="text" name="vendorname" class="form-control" value="{{ $vbsmt->vendorname or old('vendorname') }}"/>
    </div>
    
    <div class="form-group">
        <button type="submit" class='btn btn-primary'>Сохранить запись</button>
    </div>
</form>
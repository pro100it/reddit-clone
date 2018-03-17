@if( $bsmt->exists )
    <form action="{{ route('update_bsmt_path', ['bsmt' => $bsmt->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_bsmt_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    <!-- Title Field -->
    <div class="form-group">
        <label for="model">Производитель БСМТ:</label>
        <select class="form-control input-sm" name="vendor_id" id="vendor_id">
        @foreach($vbsmt as $d)
            <option value="{{$d->id}}">{{$d->vendorname}}</option>
        @endforeach
        </select>
    </div>

    <!-- Description Input -->
    <div class="form-group">
        <label for="modelnumber">Номер блока БСМТ:</label>
        <input type="text" name="modelnumber" class="form-control" value="{{ $bsmt->modelnumber or old('modelnumber') }}"/>
    </div>
    
    <div class="form-group">
        <label for="modelimei">IMEI блока БСМТ:</label>
        <input type="text" name="modelimei" class="form-control" value="{{ $bsmt->modelimei or old('modelimei') }}"/>
    </div>
    
    <div class="form-group">
        <button type="submit" class='btn btn-primary'>Сохранить запись</button>
    </div>
</form>
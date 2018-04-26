@if( $transport->exists )
    <form action="{{ route('update_transport_path', ['transport' => $transport->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_transport_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    
        <div class="form-group">
            <label for="model_name_id">Марка ТС:</label>
                <select class="form-control input-sm" name="model_name_id" id="model_name_id">
                    @foreach($modeltransport as $m)
                        <option value="{{$m->id}}"{{$m->id == $transport->model_name_id ? 'selected' : ''}}>{{$m->model_name}}</option>
                    @endforeach
            </select>    
        </div>

           
        <div class="form-group">
            <label for="gov_number">Государственный номер:</label>
            <input type="text" name="gov_number" class="form-control" value="{{ $transport->gov_number or old('gov_number') }}"/>
        </div>
    
        <div class="form-group">
            <label for="bsmt_id">Блок БСМТ:</label>
            <select class="form-control input-sm" name="bsmt_id" id="bsmt_id">
                @foreach($bsmt as $d)
                     <option value="{{$d->id}}" {{$d->id == $transport->bsmt_id ? 'selected' : ''}}>{{$d->model}} {{$d->modelnumber}}</option>
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <button type="submit" class='btn btn-primary'>Сохранить запись</button>
        </div>
</form>
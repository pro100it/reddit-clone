@if( $atransport->exists )
    <form action="{{ route('update_transport_active_path', ['atransport' => $atransport->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
    <form action="{{ route('store_transport_active_path') }}" method="POST">
@endif

    {{ csrf_field() }}

    
        <div class="form-group">
            <label for="customer_id">Заказчик:</label>
                <select class="form-control input-sm" name="customer_id" id="customer_id">
                    @foreach($customer as $c)
                        <option value="{{$c->id}}"{{$c->id == $atransport->customer_id ? 'selected' : ''}}>{{$c->customer}}</option>
                    @endforeach
                </select>    
        </div>
    
        <div class="form-group">
            <label for="transport_id">Транспорт:</label>
                <select class="form-control input-sm" name="transport_id" id="transport_id">
                    @foreach($transport as $t)
                        <option value="{{$t->id}}"{{$t->id == $atransport->transport_id ? 'selected' : ''}}>{{$t->model}} | {{$t->gov_number}}</option>
                    @endforeach
                </select>    
        </div>

        <div class="form-group">
            <label for="state_id">Статус:</label>
            <select class="form-control input-sm" name="state_id" id="state_id">
            @foreach($state as $s)
                <option value="{{$s->id}}" {{$s->id == $atransport->state_id ? 'selected' : ''}}>{{$s->name_state}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="info">Комментарий</label>
            <textarea name="info" class="form-control"/>{{$atransport->info or old('info')}}</textarea>
        </div>
    
        <div class="form-group">
            <button type="submit" class='btn btn-primary'>Сохранить запись</button>
        </div>
</form>
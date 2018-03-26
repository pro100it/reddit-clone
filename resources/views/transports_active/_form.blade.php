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
                    @foreach($customers as $c)
                        <option value="{{$c->id}}">{{$c->customer}}</option>
                    @endforeach
                </select>    
        </div>
    
        <div class="form-group">
            <label for="transport_id">Транспорт:</label>
                <select class="form-control input-sm" name="transport_id" id="transport_id">
                    @foreach($transports as $t)
                        <option value="{{$t->id}}">{{$t->model}} {{$t->modelnumber}}</option>
                    @endforeach
                </select>    
        </div>

        <div class="form-group">
            <label for="state_id">Статус:</label>
            <select class="form-control input-sm" name="state_id" id="state_id">
            @foreach($states as $s)
                <option value="{{$s->id}}">{{$s->name_state}}</option>
            @endforeach
            </select>
        </div>

        {{--  <div class="form-group">
            <label for="customer_id">Заказчик</label>
            <select class="form-control input-sm" name="customer_id" id="customer_id">
            @foreach($customer as $s)
                <option value="{{$s->id}}">{{$s->customer}}</option>
            @endforeach
            </select>
        </div>  --}}
    
        <div class="form-group">
            <button type="submit" class='btn btn-primary'>Сохранить запись</button>
        </div>
</form>
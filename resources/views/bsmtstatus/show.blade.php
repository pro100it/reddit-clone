@extends('layouts.app')

@section('content')
<hr>

     <div class="row">
        <div class="table-responsive">
            <h2><b>Статус БСМТ</b></h2>
            <br>
            <br>
            <table class="table table-borderless">
                <thead>
                    <tr class="bg-primary">
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $sbsmt->status }}</td>
                    </tr>
                </tbody>
            </table>
        </tr>   
        </div>
    </div>
    <hr>
@endsection
@extends('layouts.app')

@section('content')
<hr>

     <div class="row">
        <div class="table-responsive">
            <h2><b>Информация о производителе БСМТ</b></h2>
            <br>
            <br>
            <table class="table table-borderless">
                <thead>
                    <tr class="bg-primary">
                        <th>Производитель</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $vbsmt->vendorname }}</td>
                    </tr>
                </tbody>
            </table>
        </tr>   
        </div>
    </div>
    <hr>
@endsection
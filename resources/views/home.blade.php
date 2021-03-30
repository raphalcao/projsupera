@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Próximas Manutenções!') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><i class="fa fa-user"></i> ID</th>
                                <th><i class="fa fa-user-circle"></i> Veículo</th>
                                <th><i class="fa fa-at"></i> Serviço</th>
                                <th><i class="fa fa-home"></i> Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach($maintenances as $maintenance)
                        <tr id="_tr_client_{{$maintenance->id}}">
                            <td>{{$maintenance->id}}</td>  
                            <td>{{$maintenance->vehicle->model}}</td>
                            <td>{{$maintenance->description}}</td>
                            <td>{{$maintenance->date->format('d/m/Y')}}</td>                              
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
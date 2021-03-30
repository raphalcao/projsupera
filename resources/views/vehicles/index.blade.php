@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Veículos cadastrados') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><i class="fa fa-user"></i> ID</th>
                                <th><i class="fa fa-user-circle"></i> Veículo</th>
                                <th><i class="fa fa-at"></i> Tipo</th>
                                <th><i class="fa fa-home"></i> Montadora</th>
                                <th><i class="fa fa-home"></i> Ano</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach($vehicles as $vehicle)
                        <tr id="_tr_client_{{$vehicle->id}}">
                            <td>{{$vehicle->id}}</td>
                            <td>{{$vehicle->model}}</td>
                            <td>{{$vehicle->vehicle_type}}</td>
                            <td>{{$vehicle->automakers}}</td>
                            <td>{{$vehicle->year}}</td>
                            <td>                                
                                <a href="{{route('vehicles.edit',$vehicle->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-search"></i>Editar</a>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-search"></i>Apagar</a>
                            </td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
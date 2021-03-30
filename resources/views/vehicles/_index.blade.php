@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h5>Lista de serviços</h5>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>#ID</th>
                            <th>Serviço</th>
                            <th>Alerta Odometro</th>
                            <th>Alerta Dias</th>
                            <th>Criado Em</th>
                            <th></th>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
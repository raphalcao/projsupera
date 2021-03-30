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
                                <button type="button" class="btn btn-sm  btn-danger btn-delete-vehicle" data-id="{{$vehicle->id}}">
                                    <span class="fa fa-fw fa-trash"></span> Deletar
                                </button>
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

@section('script')
<script>
    /* Deletar */
    $('.btn-delete-vehicle').click(function() {
        var id = $(this).data('id');
        var url = "{{url('veiculo/delete')}}/" + id;
        ajax_delete(id, url)
    })

    /*
     * DELETE FUCTION
     */
    function ajax_delete(id, url) {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Tem certeza?',
            text: "Deseja realmente deletar o registro " + id,
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim!',
            cancelButtonText: 'Não!',
            reverseButtons: true
        }).then((result) => {

            if (result.value) {

                $.ajax({
                    url: url,
                    method: 'GET',
                }).done(function(data) {

                    if (data.status == 'error') {
                        Swal.fire({
                            type: 'error',
                            title: 'Não foi possível excluir o registro',
                            text: data.message,
                            showConfirmButton: true,
                            timer: 10000
                        })
                    } else {
                        $('#_tr_client_' + id).hide()
                        Swal.fire({
                            type: 'success',
                            title: 'Registro excluído com sucesso',
                            showConfirmButton: true,
                            timer: 10000
                        })
                    }

                }).fail(function(data) {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Erro ao tentar excluir!',
                        showConfirmButton: true,
                        timer: 10000
                    })
                });

            }
        })
    }
</script>
@endsection
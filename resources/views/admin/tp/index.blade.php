@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <buttton  onclick="location.href = '{{route('tpCreateAdmin')}}'" class="btn btn-outline-primary float-right">Agregar</buttton>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Paciente</th>
                        <th>Acompañante</th>
                        <th>Destino</th>
                        <th>Asunto</th>
                        <th>Empresa</th>
                        <th>Fecha Salida</th>
                        <th>Monto</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    @foreach($solicitudes as $solicitud)
                        <tr>
                            <td>{{$solicitud->id}}</td>
                            <td>{{$solicitud->paciente_txt}}</td>
                            <td>{{$solicitud->acomp_txt}}</td>
                            <td>{{$solicitud->destino}}</td>
                            <td>{{$solicitud->asunto}}</td>
                            <td>{{$solicitud->fecha_salida}}</td>
                            <td>{{$solicitud->monto}}</td>
                            <td class="text-center">
                                <button onclick="location.href = '{{route('tpShowAdmin', [$solicitud->uuid])}}'" class="btn btn-outline-secondary text-center">Ver</button>
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Paciente</th>
                        <th>Acompañante</th>
                        <th>Destino</th>
                        <th>Asunto</th>
                        <th>Empresa</th>
                        <th>Fecha Salida</th>
                        <th>Monto</th>
                        <th>Acción</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>



    </div>



@endsection

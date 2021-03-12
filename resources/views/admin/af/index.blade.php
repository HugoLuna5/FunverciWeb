@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <buttton  onclick="location.href = '{{route('afCreateAdmin')}}'" class="btn btn-outline-primary float-right">Agregar</buttton>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    @foreach($afiliados as $afiliado)
                        <tr>
                            <td>{{$afiliado->id}}</td>
                            <td>{{$afiliado->nombre.' '. $afiliado->apellido_p.' '.$afiliado->apellido_m}}</td>
                            <td>{{$afiliado->telefono}}</td>
                            <td class="text-center">
                                <button onclick="location.href = '{{route('userShowAdmin', [$afiliado->uuid])}}'" class="btn btn-outline-secondary text-center">Ver</button>
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Acción</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>



    </div>



@endsection

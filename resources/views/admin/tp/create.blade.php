@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">

                <div class="card">

                    <div class="card-header">
                        <p class="header-title">Solicitud de transporte</p>

                    </div>
                    <div class="card-body">

                        <form action="{{route('tpSaveAdmin')}}" method="POST">
                            @csrf

                            <div class="form-group">

                                <label for="paciente_txt">Paciente</label>
                                <input type="text" name="paciente_txt" id="paciente_txt" placeholder="Escribe el nombre del paciente" class="form-control" required>

                            </div>

                            <div class="form-group">

                                <label for="acomp_txt">Acompañante</label>
                                <input type="text" name="acomp_txt" id="acomp_txt" placeholder="Escribe el nombre del acompañante" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="destino">Destino</label>
                                <input type="text" name="destino" id="destino" placeholder="Escribe el destino" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="padecimiento">Padecimiento</label>
                                <input type="text" name="padecimiento" id="padecimiento" placeholder="Escribe el padecimiento" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="fecha_salida">Fecha de salida</label>
                                <input type="date" name="fecha_salida" id="fecha_salida" placeholder="Escribe la fecha de regreso" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="fecha_regreso">Fecha de regreso</label>
                                <input type="date" name="fecha_regreso" id="fecha_regreso" placeholder="Escribe la fecha de regreso" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" placeholder="Escribe la direccion" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="asunto">Asunto</label>
                                <input type="text" name="asunto" id="asunto" placeholder="Escribe el asunto" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="monto">Monto</label>
                                <input type="text" name="monto" id="monto" placeholder="Escribe el monto" class="form-control" required>

                            </div>

                            <div class="form-group">
                                <label for="empresa">Empresa</label>
                                <select name="empresa" id="empresa" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="ADO">ADO</option>
                                    <option value="ESTRELLA BLANCA">ESTRELLA BLANCA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success btn-block">Agregar</button>
                            </div>


                        </form>

                    </div>

                </div>

            </div>
        </div>



    </div>



@endsection

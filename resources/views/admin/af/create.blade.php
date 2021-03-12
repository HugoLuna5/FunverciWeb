@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">

                <div class="card">

                    <div class="card-header">
                        <p class="header-title">Agregar</p>

                    </div>
                    <div class="card-body">

                        <form action="{{route('afSaveAdmin')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">

                                <label for="folio">Folio</label>
                                <input type="text" name="folio" id="folio" placeholder="Escribe el folio"
                                       class="form-control" required>

                            </div>

                            <div class="form-group">
                                <label for="drechohabiencia">Derechohabiente</label>
                                <select name="drechohabiencia" id="drechohabiencia" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="IMMS">IMMS</option>
                                    <option value="PARTICULAR">PARTICULAR</option>
                                    <option value="CENTRO DE SALUD">CENTRO DE SALUD</option>
                                    <option value="ISSSTE">ISSSTE</option>
                                    <option value="NINGUNO">NINGUNO</option>
                                </select>
                            </div>

                            <div class="form-group form-file-upload form-file-multiple">
                                <input type="file" id="foto" name="foto" multiple="" class="inputFileHidden">
                                <div class="input-group">
                                    <input type="text" class="form-control inputFileVisible" placeholder="Selecciona una foto">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                                </div>
                            </div>


                            <div class="form-group ">

                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" placeholder="Escribre el nombre"
                                       class="form-control" required>

                            </div>

                            <div class="form-group ">

                                <label for="apellido_p">Apellido Paterno</label>
                                <input type="text" name="apellido_p" id="apellido_p" placeholder="Escribre el Apellido"
                                       class="form-control" required>

                            </div>

                            <div class="form-group ">

                                <label for="apellido_m">Apellido Materno</label>
                                <input type="text" name="apellido_m" id="apellido_m" placeholder="Escribre el Apellido"
                                       class="form-control" required>

                            </div>

                            <div class="form-group form-file-upload form-file-multiple">
                                <input type="file" id="curp" name="curp" multiple="" class="inputFileHidden">
                                <div class="input-group">
                                    <input type="text" class="form-control inputFileVisible" placeholder="Selecciona la curp">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                                </div>
                            </div>

                            <div class="form-group form-file-upload form-file-multiple">
                                <input type="file" id="ine" name="ine" multiple="" class="inputFileHidden">
                                <div class="input-group">
                                    <input type="text" class="form-control inputFileVisible" placeholder="Seleccionar INE">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                                </div>
                            </div>

                            <div class="form-group mt-1">

                                <label for="clave">Clave</label>
                                <input type="text" name="clave" id="clave"
                                       placeholder="Escribe la clave" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="tipo_sangre">Tipo de sangre</label>
                                <input type="text" name="tipo_sangre" id="tipo_sangre"
                                       placeholder="Escribe el tipo de sangre" class="form-control"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                            </div>

                            <div class="form-group mt-1">

                                <label for="edad">Edad</label>
                                <input type="number" name="edad" id="edad"
                                       placeholder="Escribe la edad" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="telefono">Telefono</label>
                                <input type="number" name="telefono" id="telefono"
                                       placeholder="Escribe el telefono" class="form-control"
                                       required>

                            </div>

                            <h4>Dirección</h4>
                            <div class="form-group mt-1">

                                <label for="calle">Calle</label>
                                <input type="text" name="calle" id="calle"
                                       placeholder="Escribe la calle" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="colonia">Colonia</label>
                                <input type="text" name="colonia" id="colonia"
                                       placeholder="Escribe la colonia" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="municipio">Municipio</label>
                                <input type="text" name="municipio" id="municipio"
                                       placeholder="Escribe el municipio" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="entidad">Entidad federativa</label>
                                <input type="text" name="entidad" id="entidad"
                                       placeholder="Escribe la entidad federativa" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="ocupacion">Ocupación</label>
                                <input type="text" name="ocupacion" id="ocupacion"
                                       placeholder="Escribe la ocupación" class="form-control"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="escolaridad">Escolaridad</label>
                                <select name="escolaridad" id="escolaridad" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="PRIMARIA">PRIMARIA</option>
                                    <option value="SECUNDARIA">SECUNDARIA</option>
                                    <option value="PREPARATORIA">PREPARATORIA</option>
                                    <option value="UNIVERSIDAD">UNIVERSIDAD</option>
                                    <option value="NINGUNA">NINGUNA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="leer_escribir">Sabe leer y escribir</label>
                                <select name="leer_escribir" id="leer_escribir" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="estado_civil">Estado civil</label>
                                <select name="estado_civil" id="estado_civil" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SOLTERO">SOLTERO</option>
                                    <option value="CASADO">CASADO</option>
                                    <option value="DIVORCIADO">DIVORCIADO</option>
                                    <option value="OTRO">OTRO</option>
                                </select>
                            </div>

                            <div class="form-group mt-1">

                                <label for="estado_civil_otro">Estado civil (Otro)</label>
                                <input type="text" name="estado_civil_otro" id="estado_civil_otro"
                                       placeholder="Escribe el estado civil" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="padecimientos">Padecimientos</label>
                                <input type="text" name="padecimientos" id="padecimientos"
                                       placeholder="Escribe los padecimientos" class="form-control"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="arboles">Cuenta con árboles en casa</label>
                                <select name="arboles" id="arboles" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>

                            <div class="form-group mt-1">

                                <label for="hijos_mas_dieciocho">Hijos mayores a 18</label>
                                <input type="number" name="hijos_mas_dieciocho" id="hijos_mas_dieciocho"
                                       placeholder="Escribe la cantidad de hijos mayores de 18" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="hijos_menos_dieciocho">>Hijos menores a 18</label>
                                <input type="number" name="hijos_menos_dieciocho" id="hijos_menos_dieciocho"
                                       placeholder="Escribe la cantidad de hijos menores de 18" class="form-control"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="dialecto">Habla algún dialecto</label>
                                <select name="dialecto" id="dialecto" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>
                            <div class="form-group mt-1">

                                <label for="dialecto_esp">Especificar dialecto</label>
                                <input type="text" name="dialecto_esp" id="dialecto_esp"
                                       placeholder="Escribe el dialecto" class="form-control"
                                       required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="tipo_cultivo">Tipo de cultivo</label>
                                <input type="text" name="tipo_cultivo" id="tipo_cultivo"
                                       placeholder="Escribe el tipo de cultivo" class="form-control"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="agua">Cuanta con el siguinte servicio: Agua</label>
                                <select name="agua" id="agua" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="luz">Habla algún dialecto</label>
                                <label for="luz">Cuanta con el siguinte servicio: Luz</label>
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="drenaje">Cuanta con el siguinte servicio: Drenaje</label>
                                <select name="drenaje" id="drenaje" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="telefono_val">Cuanta con el siguinte servicio: Telefono</label>
                                <select name="telefono_val" id="telefono_val" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="internet">Cuanta con el siguinte servicio: Internet</label>
                                <select name="internet" id="internet" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
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


    @section('js-optional')
        <script>
            // FileInput
            $('.form-file-simple .inputFileVisible').click(function() {
                $(this).siblings('.inputFileHidden').trigger('click');
            });

            $('.form-file-simple .inputFileHidden').change(function() {
                var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
                $(this).siblings('.inputFileVisible').val(filename);
            });

            $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
                $(this).parent().parent().find('.inputFileHidden').trigger('click');
                $(this).parent().parent().addClass('is-focused');
            });

            $('.form-file-multiple .inputFileHidden').change(function() {
                var names = '';
                for (var i = 0; i < $(this).get(0).files.length; ++i) {
                    if (i < $(this).get(0).files.length - 1) {
                        names += $(this).get(0).files.item(i).name + ',';
                    } else {
                        names += $(this).get(0).files.item(i).name;
                    }
                }
                $(this).siblings('.input-group').find('.inputFileVisible').val(names);
            });

            $('.form-file-multiple .btn').on('focus', function() {
                $(this).parent().siblings().trigger('focus');
            });

            $('.form-file-multiple .btn').on('focusout', function() {
                $(this).parent().siblings().trigger('focusout');
            });
        </script>
    @endsection


@endsection

@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">

                <div class="card">

                    <div class="card-header">
                        <p class="header-title">Agregar usuario</p>

                    </div>
                    <div class="card-body">

                        <form action="{{route('userSaveAdmin')}}" method="POST">
                            @csrf

                            <div class="form-group">

                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" placeholder="Escribe el nombre del usuario" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="email">Correo electronico</label>
                                <input type="email" name="email" id="email" placeholder="Escribe el correo electronico del usuario" class="form-control" required>

                            </div>

                            <div class="form-group">
                                <label for="account_type">Tipo de cuenta</label>
                                <select name="account_type" id="account_type" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Capturista">Capturista</option>
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

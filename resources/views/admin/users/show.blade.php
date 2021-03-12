@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">

                <div class="card">

                    <div class="card-header">
                        <div class="row">

                            <div class="col-md-6">
                                <h3 class="header-title">Editar usuario</h3>
                            </div>
                            <div class="col-md-6">
                                <button id="actionDeleteUser" class="btn btn-outline-danger text-right float-right">
                                    Eliminar
                                </button>
                            </div>

                        </div>


                    </div>
                    <div class="card-body">

                        <form action="{{route('userUpdateAdmin')}}" method="POST">
                            @csrf

                            <input type="hidden" name="id" id="id" value="{{$user->id}}">
                            <div class="form-group">

                                <label for="name">Nombre</label>
                                <input type="text" value="{{$user->name}}" name="name" id="name"
                                       placeholder="Escribe el nombre del usuario" class="form-control" required>

                            </div>

                            <div class="form-group mt-1">

                                <label for="email">Correo electronico</label>
                                <input type="email" value="{{$user->email}}" name="email" id="email"
                                       placeholder="Escribe el correo electronico del usuario" class="form-control"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="account_type">Tipo de cuenta</label>
                                <select name="account_type" id="account_type" required class="form-control">
                                    <option disabled>Selecciona una opción</option>
                                    @if($user->account_type == 'Admin')
                                        <option selected value="Admin">Admin</option>
                                        <option value="Capturista">Capturista</option>
                                    @else
                                        <option value="Admin">Admin</option>
                                        <option selected value="Capturista">Capturista</option>
                                    @endif

                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success btn-block">Actualizar</button>
                            </div>


                        </form>

                    </div>

                </div>

            </div>
        </div>


    </div>



@endsection

@section('js-optional')
    <script>
        const tokenWb = $('meta[name="csrf-token"]').attr('content');//token de seguridad

        const options = {
            method: 'POST',
            body: JSON.stringify({
                'id': document.getElementById('id').value,


            }),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-Token': tokenWb
            }
        };

        const btn = document.getElementById('actionDeleteUser');

        btn.addEventListener('click', function () {
            fetch('{{route('userDeleteAdmin')}}', options)
                .then((res) => res.json())
                .then((res) => {

                    if (res.status === 'success') {
                        location.href = '{{route('usersAdmin')}}';
                    }

                });
        });


    </script>
@endsection

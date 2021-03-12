@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <buttton  onclick="location.href = '{{route('userCreateAdmin')}}'" class="btn btn-outline-primary float-right">Agregar</buttton>
            </div>
        </div>

        <div class="row">
           <div class="col-md-12">
               <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
                   <thead>
                   <tr>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Correo</th>
                       <th>Acción</th>
                   </tr>
                   </thead>
                   <tbody>

                   </tbody>
                   @foreach($users as $user)
                       <tr>
                           <td>{{$user->id}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td class="text-center">
                               <button onclick="location.href = '{{route('userShowAdmin', [$user->id])}}'" class="btn btn-outline-secondary text-center">Ver</button>
                           </td>
                       </tr>
                   @endforeach
                   <tfoot>
                   <tr>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Correo</th>
                       <th>Acción</th>
                   </tr>
                   </tfoot>
               </table>
           </div>
        </div>



    </div>



@endsection

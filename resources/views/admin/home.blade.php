@extends('layouts.admin')

@section('content')


    <div class="row text-center justify-content-center">

        <div class=" col-md-4">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">person</i>
                    </div>
                    <p class="card-category">Afiliados</p>
                    <h3 class="card-title">100</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-bus"></i>
                    </div>
                    <p class="card-category">Transporte</p>
                    <h3 class="card-title">245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

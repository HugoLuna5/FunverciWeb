<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrasnporteSolicitud;
use Illuminate\Http\Request;

class TrasnporteController extends Controller
{

    public function index(){


        $solicitudes = TrasnporteSolicitud::all();

        return view('admin.tp.index', compact('solicitudes'));
    }

    public function create(){

        return view('admin.tp.create');
    }


}

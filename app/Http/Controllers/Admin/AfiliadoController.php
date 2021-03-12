<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Afiliado;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{

    public function index(){

        $afiliados = Afiliado::all();

        return view('admin.af.index', compact('afiliados'));
    }

    public function create(){
        return view('admin.af.create');
    }


}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index(){

        $users = User::all();

        return view('admin.users.index' , compact('users'));

    }

    public function show($id){

        $user = User::find($id);

        if ($user != null){


            return view('admin.users.show', compact('user'));
        }

        return abort(404);

    }

    public function create(){
        return view('admin.users.create');
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'account_type' => ['required'],

        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Todos los campos son requeridos: ' . $validator->errors(),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        $pass = Str::random(10);
        $request['password'] = Hash::make($pass);

        $user = User::create($request->all());

        if ($user != null){
            $objDemo = new \stdClass();
            $objDemo->demo_one = $request->email;
            $objDemo->demo_two = $pass;
            $objDemo->sender = 'mail';
            $objDemo->receiver = $request->email;
            Mail::to($request->email)->send(new UserMail($objDemo));
            $notification = array(
                'message' => 'Usuario agregado exitosamente!',
                'alert-type' => 'success'
            );
            return Redirect::to('admin/users')->with($notification);
        }

        $notification = array(
            'message' => 'Error al agregar usuario',
            'alert-type' => 'error'
        );
        return Redirect::to('admin/users')->with($notification);


    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'account_type' => ['required'],

        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Todos los campos son requeridos: ' . $validator->errors(),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }


        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->account_type = $request->account_type;

        if ($user->update()){
            $notification = array(
                'message' => 'Usuario actualizado con exito',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }

        $notification = array(
            'message' => 'Ocurrio un error al actualizar los datos',
            'alert-type' => 'error'
        );
        return back()->with($notification);


    }

    public function delete(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' =>  'Todos los campos son requeridos: ' . $validator->errors()],200);
        }

        $user = User::find($request->id);

        if ($user->delete()){
            return response()->json(['status' => 'success', 'message' => 'Usuario eliminado con exito'], 200);
        }

        return response()->json(['status' => 'error', 'message' => 'Ocurrio un error al intentar eliminar el usuario'], 200);

    }

}

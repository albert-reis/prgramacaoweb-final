<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function form ($_id = false) {
        $data = Usuario::find($_id);
        return view('dashboard.content-cadastrar-usuario', compact('data'));
    }

    public function list () {
        $users = Usuario::all();
        return view('dashboard.content-listar-usuario', compact('users'));
    }

    public function save (Request $request){

        $data = new Usuario($request->all());
        $data->save();

        if($data)
        {
            return redirect()->route('admin');
        }
        else
        {
            return back();
        }


    }

    public function update (Request $request, $_id) {
        
        $data = Usuario::find($_id); 
        $data->name = $request->name;
        $data->password = $request->password;
        $data->date = $request->date;
        $data->save();

        if($data)
        {
            return redirect()->route('admin');
        }
        else
        {
            return back();
        }

    }

    public function delete ($_id) {
        $data = Usuario::destroy($_id);
        if($data)
        {
            return redirect()->route('admin');
        }
        else
        {
            dd('Erro, não foi possível deletar');
        }
    }
}

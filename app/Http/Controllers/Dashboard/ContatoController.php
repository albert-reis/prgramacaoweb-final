<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function form ($_id = false) {
        $data = Contato::find($_id);
        return view('dashboard.content-cadastrar-usuario', compact('data'));
    }

    public function list () {
        $users = Contato::all();
        return view('dashboard.content-listar-usuario', compact('users'));
    }

    public function save (Request $request){

        $data = new Contato($request->all());
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
        
        $data = Contato::find($_id); 
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
        $data = Contato::destroy($_id);
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

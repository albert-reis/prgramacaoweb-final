<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function form ($_id = false) {
        $data = Contato::find($_id);
        return view('dashboard.content-cadastrar-contato', compact('data'));
    }

    public function list () {
        $contato = Contato::all();
        return view('dashboard.content-listar-contato', compact('contato'));
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
        $data->road = $request->road;
        $data->district = $request->district;
        $data->contact = $request->contact;
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

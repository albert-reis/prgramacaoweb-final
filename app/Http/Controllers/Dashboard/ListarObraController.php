<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use Illuminate\Http\Request;

class ListarObraController extends Controller
{
    public function index () {
        $obras = Obra::all();
        //$obras = Obra::where('title', 'exists', true)->get();
        return view('dashboard.content-listar-obra', compact('obras'));
    }

    public function update (Request $request, $_id) {
        
        $data = Obra::find($_id); 
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = $request->image;
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
        $data = Obra::destroy($_id);
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

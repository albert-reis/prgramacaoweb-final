<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use App\Models\Obra;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $obras = Obra::all();
        $contato = Contato::all();
        return view('dashboard.content-home', compact('obras'), compact('contato'));
    }
}

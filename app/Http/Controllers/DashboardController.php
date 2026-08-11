<?php

namespace App\Http\Controllers;

use App\Models\ImcModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        // $showImc = ImcModel::orderBy('id', 'asc')->get();

        $showImc = ImcModel::select('imc.*', 'faixas.categoria')
        ->join('faixas', 'imc.idFaixa', '=', 'faixas.idFaixa')
        ->orderBy('imc.id', 'asc')
        ->get();
        
        return view('Imc.dashboard')->with('showImc', $showImc);
    }
}

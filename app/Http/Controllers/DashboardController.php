<?php

namespace App\Http\Controllers;

use App\Models\ImcModel;
use Illuminate\Http\Request;
use ResourceBundle;

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

    public function destroy(Request $request, $id){

        $deleteImc = ImcModel::findOrFail($id);

        $deleteImc->delete();

        return redirect('/dashboard');
    }

    public function update(Request $request, $id){

        $updateIMC = ImcModel::findOrFail($id);

        $updateIMC->peso = $request->novo_peso;
        $updateIMC->altura = $request->novo_altura;

        $updateIMC->save();

        return redirect('/dashboard');

    }
}

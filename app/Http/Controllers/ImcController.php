<?php

namespace App\Http\Controllers;

use App\Models\FaixaModel;
use App\Models\ImcModel;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index(){

        $resultado = [
            "imc" => "Aguardando Valores",
            "faixa" => "Aguardando valores"
        ];

        return view('Imc.index')->with('resultado', $resultado);
    }

    public function calculaimc(Request $request)
    {
        $post = $request->all();
        $resultado["peso"] = $post["peso"];
        $resultado["altura"] = $post["altura"]; 
        
        $imc = $resultado["peso"] / ($resultado["altura"] ** 2);

        $resultado["imc"] = round($imc, 2);

    
                switch (true) {
                    case ($imc < 18.5):
                        $resultado["faixa"] = "Abaixo do peso";
                        break;
                    case ($imc >= 18.5 && $imc < 25):
                        $resultado["faixa"] = "Peso normal";
                        break;
                    case ($imc >= 25 && $imc < 30):
                        $resultado["faixa"] = "Sobrepeso";
                        break;
                    default:
                        $resultado["faixa"] = "Obesidade";
                }
        
        

        return view('imc.index')->with('resultado', $resultado);

    }

    public function store(Request $request){

        $data = $request->all();
        $peso = $data["peso"];
        $altura = $data["altura"];
        $faixa = $data["faixa"];

        $idFaixa = FaixaModel::where('categoria', $faixa)->value('idFaixa');

        $imcModel = new ImcModel();

        $imcModel->peso = $peso;
        $imcModel->altura = $altura;
        $imcModel->idFaixa = $idFaixa;

        $imcModel->save();

        return to_route('imc.index');

    }

}
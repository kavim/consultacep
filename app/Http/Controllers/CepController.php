<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function search($ceps)
    {
        $cepsArray = explode(',', $ceps);
        $results = [];

        foreach ($cepsArray as $cep) {
            $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");
            $data = $response->json();

            if (isset($data['erro']) && $data['erro'] === true) {
                return response()->json(['error' => "CEP {$cep} não encontrado"], 404);
            }

            $results[] = [
                'cep' => $data['cep'],
                'label' => "{$data['logradouro']}, {$data['localidade']}",
                'logradouro' => $data['logradouro'],
                'complemento' => $data['complemento'],
                'bairro' => $data['bairro'],
                'localidade' => $data['localidade'],
                'uf' => $data['uf'],
                'ibge' => $data['ibge'],
                'gia' => $data['gia'],
                'ddd' => $data['ddd'],
                'siafi' => $data['siafi'],
            ];
        }

        return response()->json($results);
    }
}

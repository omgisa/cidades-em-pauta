<?php

namespace App\Http\Controllers;

use App\Models\Alerta;
use App\Models\Avaliacao;
use App\Models\Endereco;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function avaliacao(Request $request){
        $request->validate([
            'local' => ['required'],
            'modelo' => ['required'],
            'avalie' => ['required'],
            'complemento' => ['nullable']
        ]);

        $endereco = Endereco::firstOrCreate([
            'rua' => $request->local
        ]);

        $avalicao = new Avaliacao();
        $avalicao->tipo = $request->modelo;
        $avalicao->nivel = $request->avalie;
        $avalicao->observacoes = $request->complemento;

        $avalicao->endereco()->associate($endereco);

        $avalicao->save();

        return redirect()->route('home')->with('sucesso', 'Sua avaliação foi enviada com sucesso');
    }

    public function alerta(Request $request){
        $request->validate([
            'local' => ['required'],
            'alerte' => ['required'],
            'complemento' => ['nullable'],
            'arquivo' => ['nullable']
        ]);

        $endereco = Endereco::firstOrCreate([
            'rua' => $request->local
        ]);

        $alerta = new Alerta();
        $alerta->tipo = $request->alerte;
        $alerta->observacoes = $request->complemento;
        $alerta->arquivo = $request->arquivo;

        $alerta->endereco()->associate($endereco);

        $alerta->save();

        return redirect()->route('home')->with('emitido', 'Seu alerta foi emitido com sucesso');

    }

}

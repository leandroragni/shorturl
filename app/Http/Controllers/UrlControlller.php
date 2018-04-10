<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UrlController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gerar(Request $request)
    {
        $endereco = $request->get('endereco');

        $enderecoReduzido = Url::gerarEnderecoReduzido();
        return Url::create(
            [
                'endereco' => $endereco,
                'endereco_reduzido' => Url::gerarEnderecoReduzido($endereco),
            ]
        );
    }

    public function obterEnderecoCompleto($enderecoReduzido)
    {
        return Url::where('endereco_reduzido', $enderecoReduzido)->first()->endereco;
    }
}

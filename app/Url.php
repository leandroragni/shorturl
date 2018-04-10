<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	const ALFABETO = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

	protected $table = 'url';

    protected $fillable = [
		'endereco',
		'endereco_reduzido',
    ];

    public static function gerarEnderecoReduzido()
    {
    	$enderecoAleatorio = str_shuffle(self::ALFABETO);

    	return substr($enderecoAleatorio, 0, 7);
    }
}

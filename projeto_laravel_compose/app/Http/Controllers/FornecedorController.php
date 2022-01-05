<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = [
            0 => [
                'nome' =>  "Fornecedor 1",
                'status' => 'N',
                'cnpj' => '12312312312',
                'ddd'=>'41',
                'telefone' =>'44-4444-022222'
            ],
            1 => [
                'nome' =>  "Fornecedor 2",
                'status' => 'N',
                'cnpj' => 'asdasdass',
                'ddd'=>'44',
                'telefone' =>'44-4444-022222'
            ],
            2 => [
                'nome' =>  "Fornecedor 3",
                'status' => 'N',
                'cnpj' => 'nuasdasdasll',
                'ddd'=>'42',
                'telefone' =>'44-4444-022222'
            ],

        ];

        // $msg = isset($fornecedor[0]['cnpj']) ? 'CNPJ INFORMADO ' : 'CNPJ NAO INFORMADO ';
        // echo $msg;

        return view('app.fornecedor.index', compact('fornecedor'));
    }
}

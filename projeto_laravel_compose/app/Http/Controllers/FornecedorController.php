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
                'cnpj' => '12312312312'
            ],
            1 => [
                'nome' =>  "Fornecedor 1",
                'status' => 'N',
                'cnpj' => null
            ]
        ];

        // $msg = isset($fornecedor[0]['cnpj']) ? 'CNPJ INFORMADO ' : 'CNPJ NAO INFORMADO ';
        // echo $msg;

        return view('app.fornecedor.index', compact('fornecedor'));
    }
}

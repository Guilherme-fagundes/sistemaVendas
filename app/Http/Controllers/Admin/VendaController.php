<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        return view('dash/vendas/nova', [
            'title' => "Minha conta | Nova venda"
        ]);
    }

    public function searchProd(Request $request)
    {
        if ($request->all()){
            print_r($request->all());
        }

    }
}

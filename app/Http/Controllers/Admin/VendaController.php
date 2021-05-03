<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ItensModel;
use App\Models\PreVendaModel;
use App\Models\VendasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    private $totalVenda;

    public function index()
    {
        if (!session()->get('userId')) {
            return redirect()->route('login.index');

        }

        $readPreVenda = DB::table('prevenda')->get();

        return view('dash/vendas/nova', [
            'title' => "Minha conta | Nova venda",
            'preVendaData' => $readPreVenda
        ]);
    }

    public function searchProd(Request $request)
    {
        if ($request->all()) {
            $readProd = DB::table('produtos')
                ->where('nome', 'LIKE', "%{$request->prodName}%")
                ->orWhere('ref', 'LIKE', $request->prodName)->first();

            $readF = DB::table('fornecedores')
                ->where('id', '=', $readProd->forn_id)->first();

            $prodVCombine = array_merge((array)$readProd, (array)$readF);

            $dataInsert = [
                'nome' => $prodVCombine['nome'],
                'preco' => $prodVCombine['preco'],
                'forn_nome' => $prodVCombine['forn_nome']
            ];

            $createPreVenda = DB::table('prevenda')
                ->insert($dataInsert);
            if ($createPreVenda) {
                return redirect()->back();

            }


        }
    }

    public function delete($id)
    {
        $delPVenda = DB::table('prevenda')->delete($id);
        if ($delPVenda) {
            return redirect()->back();

        }
    }

    public function fimPost(Request $request)
    {
        if ($request->all()){
            if (in_array('', $request->all())){
                return redirect()->back()->withErrors(['error', 'parece haver campos em branco']);

            }else{
                $getPreVenda = DB::table('prevenda')->get();

                if (!$getPreVenda->all()){
                    return redirect()->back()->withErrors(['error', 'Dados de compras não existem']);
                }else{

                    $request->request->remove('_token');
                    $this->totalVenda = $request->total;
                    $request->request->remove('total');


                    $idEndereco = DB::table('endereco')
                        ->insertGetId($request->all());

                    $arrIdEnd = [
                        'end_id' => $idEndereco
                    ];

                    foreach ($getPreVenda->all() as $arrVendadata){

                        dd($arrVendadata);
                        $createItem = new ItensModel();

                        $createVenda = new VendasModel();
                        $createVenda->end_id = $idEndereco;
                        $createVenda->iten_id = $createItem->id;
                        $createVenda->produto = $arrVendadata->nome;
                        $createVenda->total = $this->totalVenda;
                        $createVenda->save();

                        $createItem->venda_id = $createVenda->id;
                        $createItem->save();

                        $createVenda->iten_id = $createItem->id;
                        $createVenda->update();

                        $delPreVen = DB::table('prevenda')->delete();

                        if ($delPreVen){
                            return redirect()->back();
                        }

                    }


                }
            }
        }
    }
}

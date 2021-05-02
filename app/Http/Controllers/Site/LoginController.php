<?php

namespace App\Http\Controllers\Site;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => env('APP_NAME') . " | Login"
        ]);
    }

    public function loginPost(Request $request)
    {
        if (session()->get('userId')){
            return redirect()->route('dash.index');

        }

        if ($request->all()){
            $loginDataPost = $request->only(['email', 'pass']);

            if (in_array('', $loginDataPost)){
                return redirect()->back()->withErrors(['error', 'Preencha todos os campos']);

            }elseif (!filter_var($loginDataPost['email'], FILTER_VALIDATE_EMAIL)){
                return redirect()->back()->withErrors(['error', 'o e-mail informado está inválido']);
            }else{
                $email = DB::table('usuarios')->where('email', '=', $loginDataPost['email'])->first();
                $pass = Hash::check($loginDataPost['pass'], $email->pass);

                if (!$email || !$pass){
                    return redirect()->back()->withErrors(['error', 'Nenhuma conta com estes dados']);

                }else{
                    echo "Pode Logar";
                }
            }
        }
    }
}

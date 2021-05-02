<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        if (!session()->get('userId')) {
            return redirect()->route('login.index');

        }

        return view('dash/index', [
            'title' => "Minha conta"
        ]);
    }

    public function logout()
    {
        session()->forget('userId');
        return redirect()->route('login.index')->withErrors(['sussess', 'Você saiu do sistema. Volte sempre :)']);
    }
}

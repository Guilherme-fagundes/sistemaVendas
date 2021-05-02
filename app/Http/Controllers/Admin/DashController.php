<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
       if (!session()->get('userId')){
           return redirect()->route('login.index');

       }

       echo "Logado";
    }
}

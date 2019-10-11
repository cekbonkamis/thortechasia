<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $nama = 'Ari Caton';
        return view('index', ['nama' => $nama]);
    }
}

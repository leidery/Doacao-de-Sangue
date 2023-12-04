<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BloodbankController extends Controller
{
    public function index() : View
    {
        $bloodbanks = DB::table('bloodbanks')->get();

        return view('dashboard', [
            'bloodbanks' => $bloodbanks,
            'cep' => ''
        ]);
    }

    public function  search(Request $request) : View
    {
        $cep = $request->input('cep');
        $bloodbanks = DB::table('bloodbanks')
                        ->where('cep', '=', $cep)
                        ->get();

        return view('dashboard', [
            'bloodbanks' => $bloodbanks,
            'cep' => $cep
        ]);
    }
}

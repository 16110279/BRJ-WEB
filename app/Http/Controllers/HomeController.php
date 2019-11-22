<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penawaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $penawaran = Penawaran::all();
        return view('home', ['penawaran' => $penawaran]);
    }


    public function show(Penawaran $penawaran)
    {
        //
        return view('home.show', compact('Penawaran'));
    }
}

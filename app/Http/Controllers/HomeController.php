<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Percurso;
use Illuminate\Support\Facades\Auth;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $percursos = Percurso::all();
        $user = Auth::user();
        return view('home', array('percursos'=>$percursos, 'user' => $user));
    }
}

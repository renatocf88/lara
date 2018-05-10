<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ConexaoTeste;
use Entrust;
use Activity;
use Auth;

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
        $dados = 'dados ---';
        //print_r(Entrust::hasRole(Auth::user()->roles->first()->display_name));die;

        //print_r(Auth::user()->roles->first()->display_name);die;
        Activity::log('ssdsdsddsg');

        return view('home')->with('dados',ConexaoTeste::get()->first()['nome'].' | com o usurio de outro banco: '.User::get()->first()['name']);
    }
}

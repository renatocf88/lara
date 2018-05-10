<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\ConnectionClient;

class IniciaLoginController extends Controller
{
    public function index()
    {
    	
    	$linkClient = explode('.',substr(URL::current(),strpos(URL::current(),'/')+2))[0];
    	$connectionCliente = ConnectionClient::getConnectionClient($linkClient);
    	
    	if($connectionCliente){
    		session()->put('linkClient', $linkClient);
    		return view('auth.login');		
    	}else{
	       	die('msg de cliente cancelado ou inativo.');
    	}	
    }
}

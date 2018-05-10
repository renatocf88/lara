<?php

namespace App\Http\Controllers\WebServices;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class testeApiController extends Controller
{
    
	public function index(){
		$users = User::all()->toArray();
		return response()->json($users);
	}

}

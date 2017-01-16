<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Input;
use App\profile;
use App\Book;

class FactorController extends Controller
{
    //
	public function index()
    {
        //
		$user = Auth::user();
        $profile = profile::where('id_user', '=', $user->id)->first();
		$basket = $profile->basket;
		if( strlen($basket) <=5 )
			$basket = [];
		else
			$basket = json_decode($basket, true);
		return view('factor',array('basket' => $basket));
    }
}

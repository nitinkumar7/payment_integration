<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main(){
    	return view('front.home');
    }

    public function paywithpaypal(){
    	return view('front.paywithpaypal');
    }

	public function stripe(){
	 	return view('front.stripe');
 	}
}

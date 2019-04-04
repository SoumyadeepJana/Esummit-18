<?php

namespace App\Http\Controllers\KIITEcell;

use App\Http\Controllers\Controller;
use Request;
use DB;

class MainController extends Controller{

	 public function __construct()
    {
       // $this->middleware('check.session')->except('showLogin', 'showLanding');

      //  $this->middleware('log')->only('index');

      //  $this->middleware('subscribed')->except('store');
    }

	

	protected function newsletter_reg(Request $request){

		$id = str_random(40);

		$result;

		$checkEmail = DB::connection('mongodb_ecell')->collection('newsletter_subs')->where('Email', $_POST['email'])->first();

		if($checkEmail){
			$result = array( 'type' => 'error', 'message'=> 'This Email Already Exists!' );
		}

		else{
			$query = DB::connection('mongodb_ecell')->collection('newsletter_subs')->insert(['Email' => $_POST['email'], 'Id' => $id]);

       		$result = array( 'type' => 'success', 'message'=> 'Newsletter Subscribed!' );
		}

		echo json_encode($result);	

        

	}

	


}

    

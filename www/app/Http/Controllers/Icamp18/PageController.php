<?php

namespace App\Http\Controllers\Icamp18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Icamp18\Players as Players;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\UserAuth;
use Mail;
use App\Mail\Icamp18\EmailVerify;

class PageController extends Controller{

	 public function __construct()
    {
        $this->middleware('check.session')->except('showLogin', 'showLanding');

      //  $this->middleware('log')->only('index');

      //  $this->middleware('subscribed')->except('store');
    }

	protected function showDashboard(Request $request){

        return view('Icamp18.tracks');

	}

	protected function showLogin(Request $request){

        return view('Icamp18.login');

	}

	protected function showLanding(Request $request){

        return view('Icamp18.landing');

	}

	protected function showProfile(Request $request){

        return view('Icamp18.candidate_profile');

	}

	


}

    

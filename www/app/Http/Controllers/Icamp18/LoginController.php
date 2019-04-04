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
use Cookie;

class LoginController extends Controller{

	protected function check(){

	}

	protected function authenticate_player(Request $request){

        $dig_address = str_random(5);

		$result = null;

		if (Auth::attempt(['email' => $_POST['userEmail'], 'password' => $_POST['userPass']])){
			$query = Players::where('email', $_POST['userEmail'])->first();
			$result = array( 'type' => 'success', 'message'=> 'Login Success!' );

            $request->session()->push('sessionId', $dig_address);
		}
		else{
			$result = array( 'type' => 'error', 'message'=> 'Login Failed!' );
		}

		echo json_encode($result); 
	}     

    protected function register_player(Request $request){

        $dig_address = Request::ip();

        $password = Hash::make($_POST['newPass']);
        $id = 'IC18_'.strtoupper(str_random(5));
        $token = Hash::make($_POST['newEmail']);
        $emailData = array(
            'email'  => $_POST['newEmail'],
            'token'   => $token);

        $Players = new Players;

        $Players->id = $id;
        $Players->name = $_POST['humanName'];
        $Players->email = $_POST['newEmail'];
        $Players->emailStatus = 'false';
        $Players->status = 3;
        $Players->save(); 

        UserAuth::create([
            'mobile_no' => '675',
            'email' => $_POST['newEmail'],
            'password' => $password]);

        Mail::to($_POST['newEmail'])->send(new EmailVerify($emailData));

        $result = array( 'type' => 'success', 'message'=> 'Registration Success, Email Sent!' );

        $request->session()->push('sessionId', $dig_address);

        echo json_encode($result );

              
    }


}

    

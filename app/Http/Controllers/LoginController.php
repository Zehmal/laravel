<?php namespace App\Http\Controllers;

use Illuminate\Mail\Message;
use Input;
use DB;
use Log;
use App\Quotation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Routing\ResponseFactory;
use Session;
use Request;
use App\classes\DBUtils;
use App\classes\MessageUtils;
use App\classes\SessionUtils;
use App\Http\Controllers\Controller;
use App\Http\Manager\SubscriptionManager;

//Models
use App\Models\UserModel;

class LoginController extends Controller {

	public function showLogout(){
		Session::flush();
		return view('login');
	}
	public function showLogin()
	{
		return view('login');
	}

	public function handleLogin(){
		$input 		= Request::all();
		$email 		= $input['email'];
		$password 	= $input['password'];
		//$hash 		= password_hash($password, PASSWORD_BCRYPT); //Password encryption
		$userData	=	UserModel::where('email','=',$email)->first()->toArray();
		$userPass	=	$userData['password'];
		$loginFailedMsg = MessageUtils::loginFailed();


		if (password_verify($password, $userPass)) {
			$userType = $userData['user_type'];
			Session::put('user_email',$userData['email']);
			Session::put('user_name',$userData['first_name']." ".$userData['last_name']);
			if($userType=="0_user"){
				return Redirect::to('user/dashboard');
			}
			
		  	
		} 
		else {
		  return Redirect::to('login')->with(array('error'=>loginFailedMsg));
		}
	}
	

}

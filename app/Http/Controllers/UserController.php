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
use App\Http\Controllers\Controller;
use App\Http\Manager\SubscriptionManager;

//Models
use App\Models\UserModel;

class UserController extends Controller {

	public function showUserDashboard(){

		$userEmail = Session::get('user_email');


		if(!empty($userEmail)){
			$userData  = UserModel::where('email','=',$userEmail)->first()->toArray();
			return view('user.dashboard',array('userData'=>$userData));
		}
		else{
			return Redirect::to('logout');
		}
		
	}

	public function showUserTimesheet(){

		$userEmail = Session::get('user_email');


		if(!empty($userEmail)){
			$userData  = UserModel::where('email','=',$userEmail)->first()->toArray();
			return view('user.timesheet',array('userData'=>$userData));
		}
		else{
			return Redirect::to('logout');
		}
		
	}

}

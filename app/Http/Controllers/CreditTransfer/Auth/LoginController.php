<?php

namespace App\Http\Controllers\CreditTransfer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreditTransfer\LoninRequest;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
  public function index(){
    return view('creditTransfer.login');
  }

  public function login(LoninRequest $request){
    if(auth()->guard('creditTransfer')
        ->attempt([
          'empid' => $request->empid,
          'password' => $request->password
        ])){
      return view('creditTransfer.index');
    }
    return redirect()->route('credit.login')->with('error', 'Login information is not correct');
  }

  // public function logout(){
  //   auth()->logout();
  //   return redirect()->route('credit.login');
  // }
}

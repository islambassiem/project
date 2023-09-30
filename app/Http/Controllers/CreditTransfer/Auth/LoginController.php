<?php

namespace App\Http\Controllers\CreditTransfer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPUnit\Framework\returnSelf;
use App\Http\Requests\CreditTransfer\LoninRequest;

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
      return redirect()->route('credit.dashboard');
    }
    return redirect()->route('credit.login')->with('error', 'Login information is not correct');
  }

  public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('credit.loginView');
  }
}

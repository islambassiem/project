<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index(){
    return view('creditTransfer.index', [
      'subjects'        => DB::connection('creditTransfer')->table('subjects')->where('college_id', '=' ,'1')->count(),
      'transferables'   => DB::connection('creditTransfer')->table('subjects')->where('college_id', '>' ,'1')->count(),
      'colleges'        => DB::connection('creditTransfer')->table('colleges')->where('id', '>' ,'1')->count(),
      'specializations' => DB::connection('creditTransfer')->table('specializations')->count(),
    ]);
  }
}

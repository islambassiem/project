<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CreditTransfer\Transaction;
use App\Http\Requests\CreditTransfer\TransactionRequest;

class TransactionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('creditTransfer.transactions.index', [
      'transactions' => Transaction::all()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('creditTransfer.transactions.create', [
      'colleges'          => DB::connection('creditTransfer')->table('colleges')->where('id', '>', '1')->get(),
      'specializations'   => DB::connection('creditTransfer')->table('specializations')->get(),
      'departments'       => DB::connection('creditTransfer')->table('departments')->get(),
      'transderables'     => DB::connection('creditTransfer')->table('subjects')->where('college_id', '>', '1')->get(),
      'subjects'          => DB::connection('creditTransfer')->table('subjects')->where('college_id', '=', '1')->get(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(TransactionRequest $request)
  {
    $validated = $request->validated();
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    Transaction::create($validated);
    return view('creditTransfer.transactions.details', [
      'transaction' => Transaction::latest('id')->first(),
      'subjects'    => DB::connection('creditTransfer')->table('subjects')->where('college_id', '>', '1')->get()
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    return view('creditTransfer.transactions.details', [
      'transaction' => Transaction::findOrfail($id)->first(),
      'subjects'    => DB::connection('creditTransfer')->table('subjects')->where('college_id', '>', '1')->get(),
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}

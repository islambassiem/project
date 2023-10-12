<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CreditTransfer\Transaction;
use App\Models\CreditTransfer\TransactionSubject;
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
    $user_id = auth('creditTransfer')->user()->id;
    $validated['user_id'] = $user_id;
    Transaction::create($validated);
    $transaction = Transaction::with(['college', 'specialization', 'department'])->latest('created_at')->first();
    $subjects = [];
    if(isset($validated['transferable_id'])){
      foreach ($validated['transferable_id'] as $id) {
        $subjects[] = $id;
      }
    }
    if(isset($validated['subject_id'])){
      foreach ($validated['subject_id'] as $id) {
        $subjects[] = $id;
      }
    }
    foreach ($subjects as $subject) {
      TransactionSubject::create([
        'transaction_id' =>  $transaction->id,
        'subject_id'     =>  $subject,
        'user_id'        =>  $user_id
      ]);
    }

    $transferables = DB::connection('creditTransfer')
      ->table('subjects')
      ->join('transactions_subjects', 'transactions_subjects.subject_id', '=', 'subjects.id')
      ->where('transactions_subjects.transaction_id', '=',  $transaction->id)
      ->where('college_id', '>', '1')
      ->get();


      $subjects = DB::connection('creditTransfer')
      ->table('subjects')
      ->join('transactions_subjects', 'transactions_subjects.subject_id', '=', 'subjects.id')
      ->where('transactions_subjects.transaction_id', '=',  $transaction->id)
      ->where('college_id', '=', '1')
      ->get();

      $transferables_hours = DB::connection('creditTransfer')
      ->table('subjects')
      ->join('transactions_subjects', 'transactions_subjects.subject_id', '=', 'subjects.id')
      ->where('transactions_subjects.transaction_id', '=',  $transaction->id)
      ->where('college_id', '>', '1')
      ->sum('hours');

      $subjects_hours = DB::connection('creditTransfer')
      ->table('subjects')
      ->join('transactions_subjects', 'transactions_subjects.subject_id', '=', 'subjects.id')
      ->where('transactions_subjects.transaction_id', '=',  $transaction->id)
      ->where('college_id', '=', '1')
      ->sum('hours');

    return view('creditTransfer.transactions.details', [
      'transferables' => $transferables,
      'transaction'   => $transaction,
      'subjects'      => $subjects,
      'subjects_hours' => $subjects_hours,
      'transferables_hours' => $transferables_hours

    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $transaction = Transaction::findOrFail($id);
    $subjects = DB::connection('creditTransfer')
      ->table('transactions_subjects')
      ->join('subjects', 'subjects.id', '=' , 'transactions_subjects.subject_id')
      ->where('transaction_id', $transaction->id)
      ->where('subjects.college_id', '=' , '1')
      ->get();
    $transferables = DB::connection('creditTransfer')
      ->table('transactions_subjects')
      ->join('subjects', 'subjects.id', '=' , 'transactions_subjects.subject_id')
      ->where('transaction_id', $transaction->id)
      ->where('subjects.college_id', '>' , '1')
      ->get();

      $transferables_hours = DB::connection('creditTransfer')
      ->table('transactions_subjects')
      ->join('subjects', 'subjects.id', '=' , 'transactions_subjects.subject_id')
      ->where('transaction_id', $transaction->id)
      ->where('subjects.college_id', '>' , '1')
      ->sum('hours');

      $subjects_hours = DB::connection('creditTransfer')
      ->table('transactions_subjects')
      ->join('subjects', 'subjects.id', '=' , 'transactions_subjects.subject_id')
      ->where('transaction_id', $transaction->id)
      ->where('subjects.college_id', '=' , '1')
      ->sum('hours');

    return view('creditTransfer.transactions.details', [
      'transaction'    => $transaction,
      'subjects'       => $subjects,
      'transferables'  => $transferables,
      'transferables_hours' => $transferables_hours,
      'subjects_hours' => $subjects_hours
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



  public function filterTransferables($college_id)
  {
    $transferables = DB::connection('creditTransfer')->table('subjects')->where('college_id', '=', $college_id)->get();
    return json_encode($transferables);
  }
}

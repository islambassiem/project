<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\CreditTransfer\College;
use App\Models\CreditTransfer\Subject;

class TransferableController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $transferables = Subject::with('college')->where('college_id', '>', '1')->get();
    $colleges = College::where('id' , '>', '1')->latest()->get();
    return view('creditTransfer.transferables.index', compact('transferables', 'colleges'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    // $colleges = College::where('id' , '>', '1')->latest()->get();
    // return view('creditTransfer.transferables.create', compact('colleges'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' =>[
        'required',
        'max:100',
        Rule::unique('App\Models\CreditTransfer\Subject','name')
        ->where('college_id', $request->college_id)
      ],
      'code' => [
        'required',
        'max:100',
        Rule::unique('App\Models\CreditTransfer\Subject','code')
        ->where('college_id', $request->college_id)
      ],
      'college_id' => [
        'required'
      ],
      'hours' => [
        'required',
        'min:0'
      ],
    ], [
      'name.required' => 'The subject name is required',
      'code.required' => 'The Code is required',
      'hours.required' => 'The credit hours is required',
      'hours.min' => 'Hours cannot be in minus',
      'college_id' => 'You must select the college the subject belongs to'
    ]);
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    Subject::create($validated);
    session()->flash('success', 'You have added a subject successfully');
    return redirect()->route('transferable.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
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

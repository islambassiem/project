<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
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
    return view('creditTransfer.transferables.index', compact('transferables'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $colleges = College::where('id' , '>', '1')->latest()->get();
    return view('creditTransfer.transferables.create', compact('colleges'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name_en'     => ['required', 'max:100'],
      'name_ar'     => ['required', 'max:100'],
      'code_en'     => ['required', 'max:100'],
      'code_ar'     => ['required', 'max:100'],
      'college_id'  => ['required'],
      'hours'       => ['required', 'min:0'],
    ], [
      'name_en.required' => 'The subject English name is required',
      'name_ar.required' => 'The subject Arabic name is required',

      'code_en.required' => 'The English code is required',
      'code_ar.required' => 'The Arabic code is required',

      'hours.required' => 'The credit hours is required',
      'hours.min' => 'Hours cannot be in minus',

      'college_id' => 'You must select the colleg the subject belongs to'
    ]);
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    Subject::create($validated);
    session()->flash('success', 'You have added a subject succefully');
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

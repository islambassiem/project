<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CreditTransfer\Subject;

class SubjectController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('creditTransfer.subjects.index', [
      'subjects' => Subject::with('user')->where('college_id', '1')->latest()->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('creditTransfer.subjects.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => ['required', 'unique:App\Models\CreditTransfer\Subject,name', 'max:255'],
      'code' => ['required', 'unique:App\Models\CreditTransfer\Subject,code', 'max:255'],
      'hours'   => ['required', 'min:0']
    ], [
      'name.required' => 'The subject English name is required',
      'name.unique' => 'This subject already exists',
      'code.required' => 'The English code is required',
      'name.unique' => 'The subject already exists',

      'hours.required' => 'The credit hours is required',
      'hours.min' => 'Hours cannot be in minus',
    ]);
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    $validated['college_id'] = 1;
    Subject::create($validated);
    session()->flash('success', 'You have added a subject succefully');
    return redirect()->route('subject.index');
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
    $subject = Subject::find($id);
    return view('creditTransfer.subjects.edit', compact('subject'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $validated = $request->validate([
      'name' => ['required', 'unique:App\Models\CreditTransfer\Subject,name', 'max:255'],
      'code' => ['required', 'unique:App\Models\CreditTransfer\Subject,code', 'max:255'],
      'hours'   => ['required', 'min:0']
    ], [
      'name.required' => 'The subject name is required',
      'name.unique' => 'This subject already exists',
      'name_ar.unique' => 'The subject already exists ',

      'code.required' => 'The English code is required',
      'code.unique' => 'The subject already exists',

      'hours.required' => 'The credit hours is required',
      'hours.min' => 'Hours cannot be in minus',
    ]);
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    $validated['college_id'] = 1;
    Subject::where('id', $request->id)->update($validated);
    session()->flash('success', 'You have updated the subject succefully');
    return redirect()->route('subject.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Subject::where('id', $id)->delete();
    session()->flash('delete', 'You have deleted the subject succefully');
    return redirect()->route('subject.index');
  }
}

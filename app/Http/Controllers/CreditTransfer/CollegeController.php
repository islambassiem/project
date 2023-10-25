<?php

namespace App\Http\Controllers\CreditTransfer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CreditTransfer\College;


class CollegeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $colleges = College::where('id', '>', '1')->get();
    return view('creditTransfer.colleges.index', compact('colleges'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('creditTransfer.colleges.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => ['required', 'unique:App\Models\CreditTransfer\College,name'],
    ], [
      'name.required' => 'The college name is required',
      'name.unique' => 'The college already exists',
    ]);
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    College::create($validated);
    session()->flash('success', 'You have added a college succefully');
    return redirect()->route('college.index');
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

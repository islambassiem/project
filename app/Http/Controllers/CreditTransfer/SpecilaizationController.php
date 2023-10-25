<?php

namespace App\Http\Controllers\CreditTransfer;

use App\Http\Controllers\Controller;
use App\Models\CreditTransfer\Specialization;
use Illuminate\Http\Request;

class SpecilaizationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('creditTransfer.specializations.index', [
      'specializations' => Specialization::all()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('creditTransfer.specializations.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|max:255',
    ], [
      'name.required' => 'The specialization name is required',
    ]);
    $validated['user_id'] = auth('creditTransfer')->user()->id;
    Specialization::create($validated);
    session()->flash('success', 'You have added a specialization succefully');
    return redirect()->route('specialization.index');
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

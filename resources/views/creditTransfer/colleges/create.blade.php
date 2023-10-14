@extends('creditTransfer.layouts.master')
@section('css')
@endsection
@section('content')

<div class="body position-relative p-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="position-relative">Colleges / <span class="fs-6">Create</span></h2>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="card-body">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


      {{-- <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="main-content-label mg-b-5">
                Add New College
              </div>
              <form action="{{ route('college.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                      <h5 class="card-title mg-b-20">Your College Details</h5>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">English Name</label>
                        <input class="form-control" type="text" name="college_en" value="{{ old('college_en') }}">
                          @error('college_en')
                            <div class="alert alert-danger mt-2">
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Arabic Name</label>
                        <input class="form-control" type="text" name="college_ar" value="{{ old('college_ar') }}">
                        @error('college_ar')
                          <div class="alert alert-danger mt-2">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-group">
                      </div>
                      <button class="btn btn-main-primary btn-block">Add College</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
@section('js')
@endsection

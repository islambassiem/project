@extends('creditTransfer.layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
{{-- Custom style --}}
{{-- <link href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet"> --}}
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Transaction</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Crate Transaction</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
      <!-- row -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="main-content-label mg-b-5">
                Add New Transaction
              </div>
              <form action="{{ route('transaction.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                      <h5 class="card-title mg-b-20">Your Transaction Details</h5>
                      @if ($errors->any())
                        <div class="alert alert-danger pb-0">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif
                      <div class="form-group">
                        <div class="row">
                          <div class="col-7">
                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Student Name</label>
                            <input class="form-control" type="text" name="student_name" value="{{ old('student_name') }}" placeholder="Student Name">
                          </div>
                          <div class="col-3">
                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Student ID</label>
                            <input class="form-control" type="text" name="student_id" value="{{ old('student_id') }}" placeholder="Student ID"  >
                          </div>
                          <div class="col-2">
                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Semester</label>
                            <input class="form-control" type="text" name="semester" value="{{ old('semester') }}" placeholder="Sem"  >
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Previous College</label>
                            <select class="form-control select2" name="college_id" >
                              <option label="Choose college"></option>
                              @foreach ($colleges as $college)
                                <option value="{{ $college->id }}" @selected(old('college_id') == $college->id)>{{ $college->college_en }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label class="main-content-label tx-11 tx-medium tx-gray-600">Previous Specialization</label>
                          <select class="form-control select2" name="specialization_id">
                            <option label="Choose specialization"></option>
                            @foreach ($specializations as $specialization)
                              <option value="{{ $specialization->id }}"  @selected(old('specialization_id') == $specialization->id) >{{ $specialization->spec_en }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col">
                          <label class="main-content-label tx-11 tx-medium tx-gray-600">Specialization</label>
                          <select class="form-control select2" name="department_id">
                            <option label="Choose department"></option>
                            @foreach ($departments as $department)
                              <option value="{{ $department->id }}" @selected(old('department_id') == $department->id) >{{ $department->department_en }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <button class="btn btn-main-primary btn-block mt-4">Add Tranaction</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- Container closed -->
  </div>
  <!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Form-layouts js -->
<script src="{{URL::asset('assets/js/form-layouts.js')}}"></script>
{{-- Custom script --}}
<script src="{{URL::asset('assets/js/myScript.js')}}"></script>
@endsection

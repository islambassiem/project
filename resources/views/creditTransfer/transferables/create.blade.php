@extends('creditTransfer.layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Transferable Subjects</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Crate Subject</span>
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
                Add New Subject
              </div>
              <form action="{{ route('transferable.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                      <h5 class="card-title mg-b-20">Your Subject Details</h5>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">English Name</label>
                        <input class="form-control" type="text" name="name_en" value="{{ old('name_en') }}">
                          @error('name_en')
                            <div class="alert alert-danger mt-2">
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Arabic Name</label>
                        <input class="form-control" type="text" name="name_ar" value="{{ old('name_ar') }}">
                        @error('name_en')
                          <div class="alert alert-danger mt-2">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">College</label>
                        <select name="college_id" class="form-control select2">
                          <option label="Choose a college"></option>
                          @foreach ($colleges as $college)
                            <option value="{{ $college->id }}">{{ $college->college_en }}</option>
                          @endforeach
                        </select>
                        @error('college_id')
                        <div class="alert alert-danger mt-2">
                          {{ $message }}
                        </div>
                      @enderror
                      </div>

                      <div class="form-group">
                        <div class="row row-sm">
                          <div class="col-sm-8">
                            <div class="row row-sm">
                              <div class="col-sm-6">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">English Code</label>
                                <input class="form-control" type="text" name="code_en"  value="{{ old('code_en') }}">
                                @error('code_en')
                                  <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Arabic Code</label>
                                <input class="form-control" type="text" name="code_ar"  value="{{ old('code_ar') }}">
                                @error('code_ar')
                                <div class="alert alert-danger mt-2">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Hours</label>
                            <input class="form-control" type="number" min="0" name="hours"  value="{{ old('hours') }}">
                            @error('hours')
                            <div class="alert alert-danger mt-2">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-main-primary btn-block">Add Subject</button>
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
@endsection

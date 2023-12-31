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
							<h4 class="content-title mb-0 my-auto">Subjects</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Edit Subject</span>
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
                Edit Subject
              </div>
              <form action="{{ route('subject.update', $subject->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                      <h5 class="card-title mg-b-20">Your Subject Details</h5>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ $subject->name }}">
                          @error('name')
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
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Code</label>
                                <input class="form-control" type="text" name="code_en" value="{{ $subject->code }}">
                                @error('code')
                                  <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Hours</label>
                            <input class="form-control" type="number" min="0" name="hours" value="{{ $subject->hours }}">
                            @error('hours')
                            <div class="alert alert-danger mt-2">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-main-primary btn-block">Edit Subject</button>
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

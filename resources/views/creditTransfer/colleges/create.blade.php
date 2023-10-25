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
							<h4 class="content-title mb-0 my-auto">Colleges</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Crate College</span>
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
                Add New College
              </div>
              <form action="{{ route('college.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                      <h5 class="card-title mg-b-20">Your College Details</h5>
                      <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">College Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                          @error('name')
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

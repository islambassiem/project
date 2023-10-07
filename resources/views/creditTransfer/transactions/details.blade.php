@extends('creditTransfer.layouts.master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Internal Input tags css-->
<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection

@section('page-header')
  <!-- breadcrumb -->
  <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
      <div class="d-flex">
        <h4 class="content-title mb-0 my-auto">Transaction</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Details</span>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->
@endsection


@section('content')
<div class="col-xl-12">
  <!-- div -->
  <div class="card mg-b-20" id="tabs-style2">
    <div class="card-body">
      <div class="main-content-label mg-b-5">
        Credit Transfer Details
      </div>
      <div class="text-wrap">
        <div class="example">
          <div class="panel panel-primary tabs-style-2">
            <div class=" tab-menu-heading">
              <div class="tabs-menu1">
                <!-- Tabs -->
                <ul class="nav panel-tabs main-nav-line">
                  <li><a href="#tab4" class="nav-link active" data-toggle="tab">Credit Transfer Details</a></li>
                  <li><a href="#tab5" class="nav-link" data-toggle="tab">Courses to be transfered</a></li>
                  <li><a href="#tab6" class="nav-link" data-toggle="tab">Transfered Courses</a></li>
                </ul>
              </div>
            </div>
            <div class="panel-body tabs-menu-body main-content-body-right border">
              <div class="tab-content">
                <div class="tab-pane active" id="tab4">
                  <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap">
                      <tbody>
                        <tr>
                          <th scope="row">Student ID</th>
                          <td>{{ $transaction->student_id }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Student Name</th>
                          <td>{{ $transaction->student_name }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Previous College</th>
                          <td>{{ $transaction->college->college_en }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Previous Specialization</th>
                          <td>{{ $transaction->specialization->spec_en }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Upcoming Specialization</th>
                          <td>{{ $transaction->department->department_en }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Semester</th>
                          <td>{{ $transaction->semester }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="tab5">
                  <div class="row">
                    {{-- <div class="col-12">
                      <div class="col-xl-12">
                        <div class="card">
                          <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                              <h4 class="card-title mg-b-0">Transerables</h4>
                              <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">The subjects studied by the student <a href="{{ route('subject.index') }}">Learn more</a></p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table text-md-nowrap" id="example">
                                <thead>
                                  <tr>
                                    <th class="border-bottom-0">Code</th>
                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0">Add</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($subjects as $subject)
                                  <tr>
                                    <td>{{ $subject->code_en }}</td>
                                    <td>{{ $subject->name_en }}</td>
                                    <td><button class="btn btn-primary py-0 px-2" data-id="{{ $subject->id }}" id="btn"><i class="fa-solid fa-angles-right" id="i" data-id="{{ $subject->id }}"></i> Add</button></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div><!-- bd -->
                        </div><!-- bd -->
                      </div>
                    </div> --}}


                    <div class="card-body">
                      <div class="table-responsive">
                        @if (session()->has('success'))
                          <div class="alert alert-success">
                            {{ session()->get('success') }}
                          </div>
                        @endif
                        @if (session()->has('delete'))
                          <div class="alert alert-danger">
                            {{ session()->get('delete') }}
                          </div>
                        @endif
                        <table id="example" class="table key-buttons text-md-nowrap">
                          {{-- @if (count($colleges) == 0)
                            <div class="alert alert-danger">There are no colleges</div>
                          @else --}}
                            <thead>
                              <tr>
                                <th class="border-bottom-0">English Name</th>
                                <th class="border-bottom-0">Arabic Name</th>
                                <th class="border-bottom-0" style="width: 33%">Added by</th>
                              </tr>
                            </thead>
                            <tbody>
                              {{-- @foreach ($colleges as $college)
                                <tr>
                                  <td>{{ $college->college_en }}</td>
                                  <td>{{ $college->college_ar }}</td>
                                  <td>{{ $college->user->name }}</td>
                                </tr>
                              @endforeach --}}
                            </tbody>
                          {{-- @endif --}}
                        </table>
                      </div>
                    </div>




                    <div class="col-6">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab6">
                  <div class="row">
                    <div class="col-6">
                      left
                    </div>
                    <div class="col-6">
                      right
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Prism Pre code-->
@endsection


@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Internal Input tags js-->
<script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>
<!--- Tabs JS-->
<script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
<script src="{{URL::asset('assets/js/tabs.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

<script>
  document.addEventListener('click', function (e){
    if(e.target.id == 'btn' || e.target.id == 'i'){
      //
    }
  });

</script>
@endsection

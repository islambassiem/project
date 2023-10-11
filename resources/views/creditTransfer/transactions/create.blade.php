@extends('creditTransfer.layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
{{-- Custom style --}}
<link rel="stylesheet" href="{{ URL::asset('assets/css/custom/create_transaction.css') }}">
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
              <div class="main-content-label mg-b-5 mb-3">
                Add New Transaction
              </div>
              <form action="{{ route('transaction.store') }}" method="POST" id="form" onsubmit="return false">
                @csrf
                <div class="row" id="phase1">
                  <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                    <div class="card card-body border shadow-none"  id="phase1">
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
                    </div>
                    <div class="row flex-row-reverse">
                      <button type="button" class="btn btn-main-primary mt-2 mr-1" onclick="processPhase1()">Next</button>
                    </div>
                  </div>
                </div>
                <div id="phase2" class="flex-column">
                  <div class="row">
                    <div class="col-8">
                      {{-- ######################## --}}
                      <div class="col-xl-12">
                        <div class="card">
                          <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                              <h4 class="card-title mg-b-0">Transferables</h4>
                              {{-- <i class="mdi mdi-dots-horizontal text-gray"></i> --}}
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">The subjects the students studied before</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped mg-b-0">
                                <thead>
                                  <tr>
                                    <th class="border-bottom-0">ID</th>
                                    <th class="border-bottom-0">Code English</th>
                                    <th class="border-bottom-0">Name English</th>
                                    <th class="border-bottom-0">Code Arabic</th>
                                    <th class="border-bottom-0">Name Arabic</th>
                                    <th class="border-bottom-0">Hours</th>
                                    <th class="border-bottom-0">Action</th>
                                  </tr>
                                </thead>
                                <tbody id="transderables">
                                  <tr>
                                    <td colspan="7" class="alert alert-danger text-center mt-3"><span>You have to choose the college first</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- ######################## --}}
                    </div>
                    <div class="col-4">
                      {{-- ####################################### --}}
                      <div class="col-xl-12">
                        <div class="card">
                          <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                              <h4 class="card-title mg-b-0">Additons</h4>
                              <span class="btn btn-info" id="totalHours">0</span>
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">The subjects to be added to credit transfer.</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table mg-b-0 text-md-nowrap" id="addTrans">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Code English</th>
                                    <th>Hours</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="tbody">
                                  <tr>
                                    <td colspan="4" class="alert alert-danger text-center mt-3" id="empty"><span>There are no subects added yet</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- ####################################### --}}
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-6 d-flex justify-content-center">
                      <button class="btn btn-secondary justify-content-end" onclick="back1()">Back</button>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                      <button type="button" class="btn btn-primary" onclick="processPhase2()">Next</button>
                    </div>
                  </div>
                </div>
                <div id="phase3" class="flex-column">
                  <div class="row">
                    <div class="col-8">
                      {{-- ######################## --}}
                      <div class="col-xl-12">
                        <div class="card">
                          <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                              <h4 class="card-title mg-b-0">Subjects</h4>
                              {{-- <i class="mdi mdi-dots-horizontal text-gray"></i> --}}
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">The subjects the students are going to study</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped mg-b-0 ">
                                <thead>
                                  <tr>
                                    <th class="border-bottom-0">ID</th>
                                    <th class="border-bottom-0">Code English</th>
                                    <th class="border-bottom-0">Name English</th>
                                    <th class="border-bottom-0">Code Arabic</th>
                                    <th class="border-bottom-0">Name Arabic</th>
                                    <th class="border-bottom-0">Hours</th>
                                    <th class="border-bottom-0">Action</th>
                                  </tr>
                                </thead>
                                <tbody id="subjects">
                                  @foreach ($subjects as $subject)
                                    <tr>
                                      <td>{{ $subject->id }}</td>
                                      <td>{{ $subject->code_en }}</td>
                                      <td>{{ $subject->name_en }}</td>
                                      <td>{{ $subject->code_ar }}</td>
                                      <td>{{ $subject->name_ar }}</td>
                                      <td>{{ $subject->hours }}</td>
                                      <td>
                                          <button class="btn btn-success py-0"
                                              id="btnAddSubject"
                                              data-id="{{ $subject->id }}"
                                              data-code="{{ $subject->code_en }}"
                                              data-hours="{{ $subject->hours }}">
                                              <i class="fa-solid fa-angles-right"
                                              id="iAddSubject"
                                              data-id="{{ $subject->id }}"
                                              data-code="{{ $subject->code_en }}"
                                              data-hours="{{ $subject->hours }}"></i>
                                              Add
                                            </button>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- ######################## --}}
                    </div>
                    <div class="col-4">
                      {{-- ####################################### --}}
                      <div class="col-xl-12">
                        <div class="card">
                          <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                              <h4 class="card-title mg-b-0">Additons</h4>
                              <span class="btn btn-info" id="totalHoursSubjects">0</span>
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">The subjects to be added to credit transfer.</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table mg-b-0 text-md-nowrap" id="addSubjects">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Code English</th>
                                    <th>Hours</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="tbody">
                                  <tr>
                                    <td colspan="4" class="alert alert-danger text-center mt-3" id="emptySubjects"><span>There are no subects added yet</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- ####################################### --}}
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-6 d-flex justify-content-center">
                      <a class="btn btn-secondary justify-content-end" onclick="back2()">Back</a>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                      <button type="submit" form="form" class="btn btn-primary" onclick="submitForm()">Submit</button>
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
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
{{-- Custom --}}
<script src="{{URL::asset('assets/js/custom/create_transaction.js')}}"></script>
<script>

$(document).ready(function() {
  $('select[name="college_id"]').on('change', function (){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var college_id = $(this).val();
    if(college_id){
      $.ajax({
        url: "{{ URL::to('creditTransfer/transaction') }}/" + college_id,
        method: "POST",
        dataType: "json",
        success: function(data){
          $('#transderables').empty();
          for (let i = 0; i < data.length; i++) {
            const transferable = data[i];
            var table = document.getElementById('transderables');
            var row = table.insertRow();
            var c1 = row.insertCell(0);
            var c2 = row.insertCell(1);
            var c3 = row.insertCell(2);
            var c4 = row.insertCell(3);
            var c5 = row.insertCell(4);
            var c6 = row.insertCell(5);
            var c7 = row.insertCell(6);
            c1.innerText = data[i].id;
            c2.innerText = data[i].code_en;
            c3.innerText = data[i].name_en;
            c4.innerText = data[i].code_ar;
            c5.innerText = data[i].name_ar;
            c6.innerText = data[i].hours;
            c7.innerHTML = `
              <button class="btn btn-success py-0"
                id="btnAdd"
                data-id="${data[i].id}"
                data-code="${data[i].code_en}"
                data-hours="${data[i].hours}">
                <i class="fa-solid fa-angles-right"
                id="iAdd"
                data-id="${data[i].id}"
                data-code="${data[i].code_en}"
                data-hours="${data[i].hours}"></i>
                Add
              </button>`
          }
        }
      });
    }else{
      console.log('Something went wrong');
    }
  });
});
</script>
@endsection

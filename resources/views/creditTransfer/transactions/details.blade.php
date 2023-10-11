@extends('creditTransfer.layouts.master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Internal Input tags css-->
<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('assets/css/custom/transaction.css') }}">
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
				<!-- row -->
				<div class="row" id="printable">
					<div class="col-sm-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body pb-0">

                {{-- ###################################################### --}}

                <div class="row">
                  <div class="col d-flex flex-column align-items-center">
                    <img src="{{URL::asset('assets/img/brand/logo.png')}}" alt="" style="width: 100px; height: 100px;">
                    <h6>Inaya Medical Collgeges</h6>
                    <h6>كليات العناية الطبية</h6>
                    <div class="date">
                      Date: {{ date('d/m/Y') }}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="head text-center">
                      <h4>Credit Transfer Form</h4>
                      <h4>إستمارة معادلة</h4>
                    </div>
                  </div>
                </div>

                <div class="mx-3 info">
                  <div class="row row-wrapper">
                    <div class="col-3">
                      <div>إسم الطالب</div>
                      <div>Student Name</div>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                      <div>{{ $transaction->student_name }}</div>
                    </div>
                    <div class="col-3">
                      <div>الرقم الجامعي</div>
                      <div>ِAcademic Number</div>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                      <div>{{ $transaction->student_id }}</div>
                    </div>
                  </div>
                  <div class="row row-wrapper">
                    <div class="col-3">
                      <div>التخصص</div>
                      <div>Specialization</div>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                      <div>{{ $transaction->department->department_en }}</div>
                    </div>
                    <div class="col-3">
                      <div>فصل الالتحاق</div>
                      <div>Acceptance Semester</div>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                      <div>{{ $transaction->semester }}</div>
                    </div>
                  </div>
                  <div class="row row-wrapper last">
                    <div class="col-3">
                      <div>الكلية المحول منها </div>
                      <div>Previous college</div>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                      <div>{{ $transaction->college->college_en }}</div>
                    </div>
                    <div class="col-3">
                      <div>التخصص السابق</div>
                      <div>Previous Specilazation</div>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                      <div>{{ $transaction->specialization->spec_en }}</div>
                    </div>
                  </div>
                </div>

                <div class="mx-3 transfer">
                  <div class="row subjects-wrapper">
                    <div class="col-6 transferables">
                      <h4 class="text-center">
                        <div>المقررات المدروسة سابقاً</div>
                        <div>Courses to be transfered </div>
                      </h4>
                      <hr>
                      <div class="table-responsive">
                        <table class="table text-center">
                          <thead>
                            <tr>
                              <th>
                                <div>الرمز</div>
                                <div>Code</div>
                              </th>
                              <th>
                                <div>اسم المقرر</div>
                                <div>Course Name</div>
                              </th>
                              <th>
                                <div>الساعات</div>
                                <div>Hours</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($transferables as $transferable)
                              <tr>
                                <td>{{ $transferable->code_en }}</td>
                                <td>{{ $transferable->name_en }}</td>
                                <td>{{ $transferable->hours }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-6 subjects">
                      <h4 class="text-center">
                        <div>المقررات المعادلة</div>
                        <div>Transfered Courses</div>
                      </h4>
                      <hr>
                      <div class="table-responsive">
                        <table class="table text-center">
                          <thead>
                            <tr>
                              <th>
                                <div>الرمز</div>
                                <div>Code</div>
                              </th>
                              <th>
                                <div>اسم المقرر</div>
                                <div>Course Name</div>
                              </th>
                              <th>
                                <div>الساعات</div>
                                <div>Hours</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($subjects as $subject)
                              <tr>
                                <td>{{ $subject->code_en }}</td>
                                <td>{{ $subject->name_en }}</td>
                                <td>{{ $subject->hours }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- ###################################################### --}}

							</div>
						</div>
					</div>
				</div>
        <div class="row">
          <div class="col d-flex flex-row-reverse">
            <button class="btn btn-primary" id="btn">Print</button>
          </div>
        </div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection


@section('js')
<script src="{{ asset('assets/js/custom/print.js') }}"></script>
@endsection

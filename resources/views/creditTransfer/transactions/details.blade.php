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
        Basic Style2 Tabs
      </div>
      <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
      <div class="text-wrap">
        <div class="example">
          <div class="panel panel-primary tabs-style-2">
            <div class=" tab-menu-heading">
              <div class="tabs-menu1">
                <!-- Tabs -->
                <ul class="nav panel-tabs main-nav-line">
                  <li><a href="#tab4" class="nav-link active" data-toggle="tab">Credit Transfer</a></li>
                  <li><a href="#tab5" class="nav-link" data-toggle="tab">Transferables</a></li>
                  <li><a href="#tab6" class="nav-link" data-toggle="tab">Tab 03</a></li>
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
                  tab 5
                </div>
                <div class="tab-pane" id="tab6">
                  <p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
                  <p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


@endsection


@section('js')
<!--Internal  Datepicker js -->
{{-- <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script> --}}
<!-- Internal Select2 js-->
{{-- <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script> --}}
<!-- Internal Jquery.mCustomScrollbar js-->
{{-- <script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script> --}}
<!-- Internal Input tags js-->
{{-- <script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script> --}}
<!--- Tabs JS-->
{{-- <script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
<script src="{{URL::asset('assets/js/tabs.js')}}"></script> --}}
<!--Internal  Clipboard js-->
{{-- <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script> --}}
<!-- Internal Prism js-->
{{-- <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script> --}}

<!-- Internal Data tables -->
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
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
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script> --}}
<!--Internal  Datatable js -->
{{-- <script src="{{URL::asset('assets/js/jquery.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.js')}}"></script> --}}
@endsection

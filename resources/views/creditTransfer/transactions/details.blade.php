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
                  <div>{{ $transaction->student_id }}</div>
                  <div>{{ $transaction->student_name }}</div>
                  <div>{{ $transaction->semester }}</div>
                  <div>{{ $transaction->college->college_en }}</div>
                  <div>{{ $transaction->specialization->spec_en }}</div>
                  <div>{{ $transaction->department->department_en }}</div>
                  <div>{{ $transaction->user->name }}</div>
                </div>
                <div class="tab-pane" id="tab5">
                  <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                  <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
                  <p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                </div>
                <div class="tab-pane" id="tab6">
                  <p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
                  <p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
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
@endsection

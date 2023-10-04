@extends('creditTransfer.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
  <!-- breadcrumb -->
  <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
      <div class="d-flex">
        <h4 class="content-title mb-0 my-auto">Subjects</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Inaya</span>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->
@endsection
@section('content')
  <!-- row opened -->
  <div class="row row-sm">
    <!--div-->
    <div class="col-xl-12">
      <div class="card mg-b-20">
        <div class="card-header pb-0">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0">Inaya Subjects</h4>
            <a href="{{ route('subject.create') }}" class="btn btn-primary">Add Subject</a>
          </div>
        </div>
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
              @if (count($subjects) == 0)
                <div class="alert alert-danger">There are no subjects</div>
              @else
                <thead>
                  <tr>
                    <th class="border-bottom-0">English Name</th>
                    <th class="border-bottom-0">Arabic Name</th>
                    <th class="border-bottom-0">English Code</th>
                    <th class="border-bottom-0">Arabic Code</th>
                    <th class="border-bottom-0">Hours</th>
                    <th class="border-bottom-0">Added by</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subjects as $subject)
                    <tr>
                      <td>{{ $subject->name_en }}</td>
                      <td>{{ $subject->name_ar }}</td>
                      <td>{{ $subject->code_en }}</td>
                      <td>{{ $subject->code_ar }}</td>
                      <td>{{ $subject->hours }}</td>
                      <td>{{ $subject->user->name }}</td>
                      {{-- <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-info"> <i class="fa-solid fa-user-pen"></i>Edit</a> --}}
                      {{-- <td>
                        <form action="{{ route('subject.destroy', $subject->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td> --}}
                    </tr>
                  @endforeach
                </tbody>
              @endif
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--/div-->

  </div>
  <!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
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
@endsection

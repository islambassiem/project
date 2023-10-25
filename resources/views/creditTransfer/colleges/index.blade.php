@extends('creditTransfer.layouts.master')
@section('css')
@endsection
@section('content')

<div class="body position-relative p-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="position-relative">Colleges</h2>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex flex-row-reverse">
        <a href="{{ route('college.create') }}" class="btn btn-primary">Add College</a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table key-buttons text-md-nowrap">
                @if (count($colleges) == 0)
                  <div class="alert alert-danger">There are no colleges</div>
                @else
                  <thead>
                    <tr>
                      <th>English Name</th>
                      <th>Arabic Name</th>
                      <th>Added by</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($colleges as $college)
                      <tr>
                        <td>{{ $college->college_en }}</td>
                        <td>{{ $college->college_ar }}</td>
                        <td>{{ $college->user->name }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                @endif
              </table>
            </div>
          <div>
        </div>
      </div>
    </div>
  </div>
</div>



  {{-- <div class="row row-sm">
    <!--div-->
    <div class="col-xl-12">
      <div class="card mg-b-20">
        <div class="card-header pb-0">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0">Colleges</h4>
            <a href="{{ route('college.create') }}" class="btn btn-primary">Add College</a>
          </div>
        </div>
        <div class="card-body m-5">
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
              @if (count($colleges) == 0)
                <div class="alert alert-danger">There are no colleges</div>
              @else
                <thead>
                  <tr>
<<<<<<< HEAD
                    <th class="border-bottom-0">College Name</th>
=======
                    <th>English Name</th>
                    <th class="border-bottom-0">Arabic Name</th>
>>>>>>> 06072e5322e6b0c3642cac936edd515b33aa1429
                    <th class="border-bottom-0" style="width: 33%">Added by</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($colleges as $college)
                    <tr>
                      <td>{{ $college->name }}</td>
                      <td>{{ $college->user->name }}</td>
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
</div>
</div> --}}
@endsection


@section('js')
@endsection

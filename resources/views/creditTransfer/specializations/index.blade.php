@extends('creditTransfer.layouts.master')
@section('css')
@endsection

@section('content')
<div class="body position-relative p-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="position-relative">Specializations</h2>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex flex-row-reverse">
        <a href="{{ route('specialization.create') }}" class="btn btn-primary">Add Specialization</a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table key-buttons text-md-nowrap">
                @if (count($specializations) == 0)
                  <div class="alert alert-danger">There are no Specializations</div>
                @else
                  <thead>
                    <tr>
                      <th class="border-bottom-0">English Name</th>
                      <th class="border-bottom-0">Arabic Name</th>
                      <th class="border-bottom-0" style="width: 33%">Added by</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($specializations as $specialization)
                      <tr>
                        <td>{{ $specialization->spec_en }}</td>
                        <td>{{ $specialization->spec_ar }}</td>
                        <td>{{ $specialization->user->name }}</td>
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
    <div class="col-xl-12">
      <div class="card mg-b-20">
        <div class="card-header pb-0">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0">Specializations</h4>
            <a href="{{ route('specialization.create') }}" class="btn btn-primary">Add Specialization</a>
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
              @if (count($specializations) == 0)
                <div class="alert alert-danger">There are no Specializations</div>
              @else
                <thead>
                  <tr>
                    <th class="border-bottom-0">English Name</th>
                    <th class="border-bottom-0">Arabic Name</th>
                    <th class="border-bottom-0" style="width: 33%">Added by</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($specializations as $specialization)
                    <tr>
                      <td>{{ $specialization->spec_en }}</td>
                      <td>{{ $specialization->spec_ar }}</td>
                      <td>{{ $specialization->user->name }}</td>
                    </tr>
                  @endforeach
                </tbody>
              @endif
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div> --}}
@endsection
@section('js')
@endsection

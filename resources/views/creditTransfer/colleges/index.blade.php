@extends('creditTransfer.layouts.master')

@section('title')
  Colleges
@endsection
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
        <button type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#addCollege">
          Add College
        </button>
        <!-- Start Modal -->
        <div class="modal fade" id="addCollege" tabindex="-1" aria-labelledby="addCollegeLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="addCollegeLabel">Add a college or a University</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('college.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="collegeName" class="form-label">College Name</label>
                    <input type="text" name="name" class="form-control" id="collegeName" placeholder="College Name">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- End Modal -->
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table key-buttons text-md-nowrap">
                @error('name')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
              @enderror
                @if (count($colleges) == 0)
                  <div class="alert alert-danger">There are no colleges</div>
                @else
                  <thead>
                    <tr>
                      <th>College ID</th>
                      <th>College Name</th>
                      <th>Added by</th>
                      <th>Added at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($colleges as $college)
                      <tr>
                        <td>{{ $college->id }}</td>
                        <td>{{ $college->name }}</td>
                        <td>{{ $college->user->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($college->created_at)) }}</td>
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
                    <th class="border-bottom-0">College Name</th>
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

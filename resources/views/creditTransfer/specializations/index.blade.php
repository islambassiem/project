@extends('creditTransfer.layouts.master')

@section('title')
  Specializations
@endsection


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
        <button type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#Specialization">
          Add a Specialization
        </button>
        <!-- Start Modal -->
        <div class="modal fade" id="Specialization" tabindex="-1" aria-labelledby="SpecializationLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="SpecializationLabel">Add a Specialization</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('specialization.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="specializationName" class="form-label">Specialization Name</label>
                    <input type="text" name="name" class="form-control" id="specializationName" placeholder="Specialization Name">
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
                @if (count($specializations) == 0)
                  <div class="alert alert-danger">There are no Specializations</div>
                @else
                  <thead>
                    <tr>
                      <th>Specialization ID</th>
                      <th>Specialization Name</th>
                      <th>Added by</th>
                      <th>Added at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($specializations as $specialization)
                      <tr>
                        <td>{{ $specialization->id }}</td>
                        <td>{{ $specialization->name }}</td>
                        <td>{{ $specialization->user->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($specialization->created_at)) }}</td>
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
                    <th class="border-bottom-0">Name</th>
                    <th class="border-bottom-0" style="width: 33%">Added by</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($specializations as $specialization)
                    <tr>
                      <td>{{ $specialization->name }}</td>
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

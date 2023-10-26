@extends('creditTransfer.layouts.master')

@section('title')
  Transferables
@endsection


@section('css')
@endsection

@section('content')
<div class="body position-relative p-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="position-relative">Transferables</h2>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex flex-row-reverse">
        <button type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#addTransferable">
          Add old subject
        </button>
        <!-- Start Modal -->
        <div class="modal fade" id="addTransferable" tabindex="-1" aria-labelledby="addTransferableLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTransferableLabel">Add a subject studied by the student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('transferable.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                  <div class="mb-3">
                    {{-- <label for="subhectName" class="form-label">Subject Name</label> --}}
                    <input type="text" name="name" class="form-control" id="subhectName" placeholder="Subject Name" value="{{ old('name') }}">
                  </div>
                  <div class="mb-3">
                    {{-- <label for="subjectCode" class="form-label">Subject Code</label> --}}
                    <input type="text" name="code" class="form-control" id="subjectCode" placeholder="Subject Code" value="{{ old('code') }}">
                  </div>
                  <div class="mb-3">
                    {{-- <label for="hours" class="form-label">Subject Hours</label> --}}
                    <input type="number" name="hours" class="form-control" id="hours" placeholder="Subject Hours"  value="{{ old('hours') }}">
                  </div>
                  <div class="mb-3">
                    {{-- <label for="hours" class="form-label">Subject Hours</label> --}}
                    <select class="form-select" aria-label="Default select example" name="college_id">
                      <option value="0" selected disabled>Select a college</option>
                      @foreach ($colleges as $college)
                        <option value="{{ $college->id }}" {{ $college->id == old('college_id' ?? 'selected') }}>{{ $college->name }}</option>
                      @endforeach
                    </select>
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
              <table id="transferables" class="table key-buttons text-md-nowrap table-striped">
                @error('name')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
                @error('code')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
                @error('hours')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
                @error('college_id')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
                @if (count($transferables) == 0)
                  <div class="alert alert-danger">There are no Transerable subjects</div>
                @else
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Hours</th>
                      <th>College</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($transferables as $transferable)
                      <tr>
                        <td>{{ $transferable->id }}</td>
                        <td>{{ $transferable->name }}</td>
                        <td>{{ $transferable->code }}</td>
                        <td>{{ $transferable->hours }}</td>
                        <td>{{ $transferable->college->name }}</td>
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
@endsection
@section('js')
<script>
  let table = new DataTable('#transferables');
</script>
@endsection

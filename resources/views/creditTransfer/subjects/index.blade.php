@extends('creditTransfer.layouts.master')

@section('title')
  Subjects
@endsection

@section('css')
@endsection

@section('content')
<div class="body position-relative p-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="position-relative">Subjects</h2>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex flex-row-reverse">
        <button type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#addTransferable">
          Add Inaya subject
        </button>
        <!-- Start Modal -->
        <div class="modal fade" id="addTransferable" tabindex="-1" aria-labelledby="addTransferableLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTransferableLabel">Add a subject to be studied by the student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('subject.store') }}" method="POST">
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
              <table id="subjects" class="table key-buttons text-md-nowrap table-striped">
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
                @if (count($subjects) == 0)
                  <div class="alert alert-danger">There are no Subjects</div>
                @else
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Hours</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subjects as $subject)
                      <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->code }}</td>
                        <td>{{ $subject->hours }}</td>
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
    let table = new DataTable('#subjects');
  </script>
@endsection

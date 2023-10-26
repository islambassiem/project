@extends('creditTransfer.layouts.master')

@section('title')
  Transactions
@endsection
@section('css')
@endsection

@section('content')


<div class="body position-relative p-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="position-relative">Transactions</h2>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex flex-row-reverse">
        <button type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#addTransation">
          Add Transaction
        </button>
        <!-- Start Modal -->
        <div class="modal fade" id="addTransation" tabindex="-1" aria-labelledby="addTransationLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTransationLabel">Add a college or a University</h1>
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
              <table id="example" class="table key-buttons text-md-nowrap table-striped">
                @error('name')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
              @enderror
                @if (count($transactions) == 0)
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
                    @foreach ($transactions as $transaction)
                      <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->student_name }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($transaction->created_at)) }}</td>
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
















  <div class="row row-sm">
    <!--div-->
    <div class="col-xl-12">
      <div class="card mg-b-20">
        <div class="card-header pb-0">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0">Transactions</h4>
            <
            
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
              @if (count($transactions) == 0)
                <div class="alert alert-danger">There are no transactions</div>
              @else
                <thead>
                  <tr>
                    <th class="border-bottom-0">ID</th>
                    <th class="border-bottom-0">Name</th>
                    <th class="border-bottom-0">Semester</th>
                    <th class="border-bottom-0">College</th>
                    <th class="border-bottom-0">Specialization old</th>
                    <th class="border-bottom-0">Specialization new</th>
                    <th class="border-bottom-0">link</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transactions as $transaction)
                    <tr>
                      <td>{{ $transaction->student_id }}</td>
                      <td>{{ $transaction->student_name }}</td>
                      <td>{{ $transaction->semester }}</td>
                      <td>{{ $transaction->college->college_en }}</td>
                      <td>{{ $transaction->specialization->spec_en }}</td>
                      <td>{{ $transaction->department->department_en }}</td>
                      <td><a href="{{ route('transaction.show', ['transaction' => $transaction->id]) }}" class="btn btn-primary">>></a></td>
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

@endsection
@section('js')
@endsection

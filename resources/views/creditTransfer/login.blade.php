<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="{{ asset('assets/plugins/js/color-modes.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link href="{{ asset('assets/plugins/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/signin-inline.css') }}">
    <link href="{{ asset('assets/plugins/css/sign-in.css') }}" rel="stylesheet">
    <title>Sign In </title>
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
      @if (session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
      @endif
      <form action="{{ route('credit.login') }}" method="POST">
        @csrf
        <img class="mb-4 m-auto d-block" src="{{ asset('assets/imgs/logo.png') }}" alt="">
        <h1 class="h3 mb-3 fw-normal text-center">Credit Transfer System</h1>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="empid">
          <label for="floatingInput">Employee ID</label>
          @error('empid')
          <div class="alert alert-danger my-2">
            {{ $message }}
          </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
          @error('password')
          <div class="alert alert-danger my-2">
            {{ $message }}
          </div>
        @enderror
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      </form>
    </main>
    <script src="{{ asset('assets/plugins/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>

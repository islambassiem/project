<!DOCTYPE html>
<html lang="en">

  @include('creditTransfer.layouts.head')
  @yield('css')

<body>
	<div class="container-fluid page">
		<div class="row">
      @include('creditTransfer.layouts.sidebar')
      <div class="col-10 content">
        @include('creditTransfer/layouts.header')
        @yield('content')
        </div>
		</div>
	</div>
  @include('creditTransfer.layouts.footer')
  @yield('js')
</body>
</html>

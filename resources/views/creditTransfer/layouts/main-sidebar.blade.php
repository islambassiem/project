<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ route('credit.dashboard') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ auth('creditTransfer')->user()->name }}</h4>
						</div>
					</div>
				</div>
        <ul class="side-menu">
					<li class="slide">
            <a class="side-menu__item p-1" href="{{ route('credit.dashboard') }}">
              <i class="fa-solid fa-house mx-2"></i>
              <span class="side-menu__label">
                Home
              </span>
            </a>
					</li>
					<li class="slide">
						<a class="side-menu__item p-1" href="{{ route('college.index') }}">
              <i class="fa-solid fa-building-columns mx-2"></i>
              <span class="side-menu__label">
                Colleges
              </span>
            </a>
					</li>
          <li class="slide">
						<a class="side-menu__item p-1" href="{{ route('transferable.index') }}">
              <i class="fa-solid fa-book-open-reader mx-2"></i>
              <span class="side-menu__label">
                Transferables
              </span>
            </a>
					</li>
          <li class="slide">
						<a class="side-menu__item p-1" href="{{ route('specialization.index') }}">
              <i class="fa-solid fa-graduation-cap mx-2"></i>
              <span class="side-menu__label">
                Specializations
              </span>
            </a>
					</li>
          <li class="slide">
            <a class="side-menu__item p-1" href="{{ route('subject.index') }}">
              <i class="fa-solid fa-book-open mx-2"></i>
              <span class="side-menu__label">
                Subjects
              </span>
            </a>
					</li>
          <li class="slide">
            <a class="side-menu__item p-1" href="{{ route('transaction.index') }}">
              <i class="fa-solid fa-book-open mx-2"></i>
              <span class="side-menu__label">
                Transactions
              </span>
            </a>
					</li>
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->

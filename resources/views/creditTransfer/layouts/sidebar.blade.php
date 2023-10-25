<div class="col-2 sidebar position-relative">
  <div class="d-flex flex-column align-items-center mt-2">
    <img src="{{ asset('assets/imgs/logo.png') }}" alt="" class="logo">
    <h5 class="mt-2 college position-relative">Inaya Medical College</h5>
  </div>
  <div class="links mt-5">
    <ul>
      <li>
        <a href="{{ route('credit.dashboard') }}" class="d-flex align-center p-2 my-2 {{ Request::is('creditTransfer') ? 'active' : ''  }}">
          <i class="fa-regular fa-chart-bar fa-fw align-self-center me-2"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('college.index') }}" class="d-flex align-center p-2 {{ Request::routeIs('college.*') ? 'active' : ''  }}">
          <i class="fa-solid fa-building-columns fa-fw align-self-center me-2"></i>
          <span>Colleges</span>
        </a>
      </li>
      <li>
        <a href="{{ route('transferable.index') }}" class="d-flex align-center p-2 {{ Request::routeIs('transferable.*') ? 'active' : ''  }}">
          <i class="fa-solid fa-book-open-reader fa-fw align-self-center me-2"></i>
          <span>Transferable</span>
        </a>
      </li>
      <li>
        <a href="{{ route('specialization.index') }}" class="d-flex align-center p-2 {{ Request::routeIs('specialization.*') ? 'active' : ''  }}">
          <i class="fa-solid fa-graduation-cap fa-fw align-self-center me-2"></i>
          <span>Specializations</span>
        </a>
      </li>
      <li>
        <a href="{{ route('subject.index') }}" class="d-flex align-center p-2 {{ Request::routeIs('subject.*') ? 'active' : ''  }}">
          <i class="fa-solid fa-book-open fa-fw align-self-center me-2"></i>
          <span>Subjects</span>
        </a>
      </li>
      <li>
        <a href="{{ route('transaction.index') }}" class="d-flex align-center p-2 {{ Request::routeIs('transaction.*') ? 'active' : ''  }}">
        <i class="fa-solid fa-code-fork fa-fw align-self-center me-2"></i>
          <span>Transactions</span>
        </a>
      </li>
    </ul>
  </div>
</div>

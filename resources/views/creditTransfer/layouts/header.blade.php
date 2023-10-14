<div class="header d-flex justify-content-between align-items-center">
  <div class="h4 m-3">
    <span>Welcome</span>
    <span class="fst-italic fs-5">{{ auth('creditTransfer')->user()->name }}</span>
  </div>
  <div class="logout pe-4">
    <a href="{{ route('credit.logout') }}" class="p-2 btn text-white">
      <i class="fa-solid fa-power-off"></i>
      <span>logout</span>
    </a>
  </div>
</div>

<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
      <h6 class="text-overflow m-0">Welcome!</h6>
    </div>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-single-02"></i>
      <span>My profile</span>
    </a>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-settings-gear-65"></i>
      <span>Settings</span>
    </a>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-calendar-grid-58"></i>
      <span>Activity</span>
    </a>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-support-16"></i>
      <span>Support</span>
    </a>
    <div class="dropdown-divider"></div>
    <a  class="dropdown-item" href="{{route('logout')}}"
    onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
  >
  <i class="fas fa-sign-in-alt"></i> Sair
</a>
<form action="{{route('logout')}}" method="POST" style="display: none;" id="formLogout">
  @csrf
</form>
    </a>
  </div>

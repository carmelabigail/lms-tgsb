
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <center>
    <img src="img/terazlogo.png" alt="Teraz Global" style="width:116px;height:90px;">
    <h3 class="mt-1" style="color:#1EBE73"><b>TGLeave.</b></h3>
  </center>
 
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')? 'active' : '' }}" aria-current="page" href="/dashboard"><h5>
            <i class="bi bi-house-heart-fill"></i>
            &nbsp; Dashboard</h5>
          </a>
        </li>
        <li class="nav-item">
          {{-- profile --}}
          <a class="nav-link {{ Request::is('attendance')? 'active' : '' }}" href="/attendance"><h5>
            <i class="bi bi-stickies-fill"></i>
            &nbsp; Attendance</h5>
          </a>
        <li class="nav-item">
          {{-- profile --}}
          <a class="nav-link {{ Request::is('profile')? 'active' : '' }}" href="/profile"><h5>
            <i class="bi bi-person-badge-fill"></i>
            &nbsp; Profile</h5>
          </a>
        </li>
        {{-- apply leave --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('applyleave')? 'active' : '' }}" href="/applyleave"><h5>
            <i class="bi bi-calendar-heart"></i>
            &nbsp; Apply Leave</h5>
          </a>
        </li>
      </ul>
    <br>

 
    <div class="text-center p-3 mb-5 text-footer">
      © 2022 Copyright:
      <a class="text-footer text-success text-decoration-none" href="#"><b>KCI</b></a>
    </div>

     
    
    </div>
  </nav>
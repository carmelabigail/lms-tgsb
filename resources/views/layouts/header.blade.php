<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4" href="/dashboard"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-4 py-1 pt-3 mt-1 bg-success border-0"> 
            <a>Logout &nbsp;</a><i class="bi bi-box-arrow-right"></i>
            </button>
          </form>
      </div>
    </div>
  </header>

  <style>
    .rowl a {
      margin-right: 20px;
      color: white; 
      font-size: 17px;
      cursor: pointer;
    }

    .rowl {
      margin-top: 10px;
    }

</style>
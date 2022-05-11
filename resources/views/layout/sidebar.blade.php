<aside id="sidebar-wrapper">
    <div class="sidebar-brand" style="background-color: #0061FF">
      <a href="index.html" style="color: #ffffff">Peduli Diri</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">PD</a>
    </div>
    <ul class="sidebar-menu">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link"><i class="fas fa-plane"></i><span style="color: black">Dashboard</span></a>
            <a href="/inputPerjalanan" class="nav-link"><i class="fas fa-address-book"></i><span style="color: black">Data</span></a>
            <a href="/logout" class="dropdown-item has-icon text-danger" onclick="
            event.preventDefault();
            document.getElementById('formLogout').submit();
            ">
              <i class="fas fa-sign-out-alt"></i><span>Logout</span>
            </a>
            <form id="formLogout" action="/logout" method="POST">
              {{ csrf_field() }}
            </form>
        </li>
    </ul>



  </aside>

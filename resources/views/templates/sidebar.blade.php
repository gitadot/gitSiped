<div  class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse  >
          <div class="position-sticky pt-2">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }} "  href="/">
                  <span data-feather="layers"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('suratMasuk') ? 'active' : '' }}" href="/suratMasuk">
                  <span data-feather="file"></span>
                  Surat Masuk
                </a>           
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('suratKeluar') ? 'active' : '' }}" href="#">
                  <span data-feather="file-text"></span>
                  Surat Keluar
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('#') ? 'active' : '' }}" href="#">
                  <span data-feather="users"></span>
                  Manajemen Akun
                </a>
              </li>   
              
            </ul>      
          </div>
        </nav>
    
       
      </div>
 </div>
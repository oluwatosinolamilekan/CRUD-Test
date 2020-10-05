<header class="main-header" id="header">
   <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <!-- Sidebar toggle button -->
      <button id="sidebar-toggler" class="sidebar-toggle">
      <span class="sr-only">Toggle navigation</span>
      </button>
      <span class="page-title">dashboard</span>
      <div class="navbar-right ">
         <!-- search form -->
         <ul class="nav navbar-nav">
            <!-- Offcanvas -->
            <!-- User Account -->
            <li class="dropdown user-menu">
               <button class="dropdown-toggle nav-link" data-toggle="dropdown">
               <img src="{{ asset('backend/assets/img/user/user-xs-01.jpg') }}" class="user-image rounded-circle" alt="User Image" />
               <span class="d-none d-lg-inline-block">Lekan</span>
               </button>
               <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-footer">
                     <a class="dropdown-link-item" href="{{ route('logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
</header>

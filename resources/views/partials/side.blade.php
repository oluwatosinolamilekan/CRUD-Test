<aside class="left-sidebar sidebar-dark" id="left-sidebar">
   <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
         <a href="#">
         <img src="{{asset('backend/assets/img/logo.png')}}" alt="Mono">
         <span class="brand-name">EnterPrise</span>
         </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-left" data-simplebar style="height: 100%;">
         <!-- sidebar menu -->
         <ul class="nav sidebar-inner" id="sidebar-menu">
            <li
               class="active"
               >
               <a class="sidenav-item-link" href="index-2.html">
               <i class="mdi mdi-briefcase-account-outline"></i>
               <span class="nav-text">Dashboard</span>
               </a>
            </li>
            <li class="section-title">
               Management
            </li>
            <li  class="has-sub" >
               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                  aria-expanded="false" aria-controls="email">
               <i class="mdi mdi-lighthouse"></i>
               <span class="nav-text">Hotel</span> <b class="caret"></b>
               </a>
               <ul  class="collapse"  id="email"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                     <li>
                        <a class="sidenav-item-link" href="#">
                        <span class="nav-text">All Hotel</span>
                        </a>
                     </li>
                     <li >
                        <a class="sidenav-item-link" href="#">
                        <span class="nav-text">Create Hotel</span>
                        </a>
                     </li>
                  </div>
               </ul>
            </li>  
               <li>
               <a class="sidenav-item-link" href="chat.html">
               <i class="mdi mdi-broom"></i>
               <span class="nav-text">Maintenance</span>
               </a>
            </li>
            </li>
         </ul>
      </div>
   </div>
</aside>

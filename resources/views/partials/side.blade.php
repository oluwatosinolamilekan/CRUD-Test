<aside class="left-sidebar sidebar-dark" id="left-sidebar">
   <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
         <a href="#">
         <img src="{{asset('backend/assets/img/logo.png')}}" alt="Mono">
         <span class="brand-name">Crud</span>
         </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-left" data-simplebar style="height: 100%;">
         <!-- sidebar menu -->
         <ul class="nav sidebar-inner" id="sidebar-menu">
            <li
               class=""
               >
               <a class="sidenav-item-link" href="{{ route('exam.index') }}">
               <i class="mdi mdi-briefcase-account-outline"></i>
               <span class="nav-text">Exam</span>
               </a>
            </li>
            <li
               >
               <a class="sidenav-item-link" href="{{ route('question.index') }}">
               <i class="mdi mdi-briefcase-account-outline"></i>
               <span class="nav-text">Question</span>
               </a>
            </li>
             <li
               >
               <a class="sidenav-item-link" href="{{ route('categories.index') }}">
               <i class="mdi mdi-briefcase-account-outline"></i>
               <span class="nav-text">Categories</span>
               </a>
         </li>
            <li
               >
               <a class="sidenav-item-link" href="{{ route('question-option.index') }}">
               <i class="mdi mdi-briefcase-account-outline"></i>
               <span class="nav-text">Question Option</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</aside>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Dashboard..</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- GOOGLE FONTS -->
      <link href="{{ asset('backend/fonts.googleapis.com/cssbf7a?family=Karla:400,700|Roboto') }}" rel="stylesheet">
      <link href="{{asset('backend/assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
      <link href="{{asset('backend/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
      <!-- PLUGINS CSS STYLE -->
      <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
      <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
      <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
      <link href="{{asset('backend/cdn.quilljs.com/1.3.6/quill.snow.css')}}" rel="stylesheet">
      <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
      <!-- MONO CSS -->
      <link id="main-css-href" rel="stylesheet" href="{{asset('backend/assets/css/mono.css')}}" />
         

      <!-- CSS for Demo -->
      <!-- FAVICON -->
      <link href="{{asset('backend/assets/img/favicon.png')}}" rel="shortcut icon" />
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
   </head>
   <body class="navbar-fixed sidebar-fixed" id="body">
      <script>
         NProgress.configure({ showSpinner: false });
         NProgress.start();
      </script>
      <div id="toaster"></div>
      <!-- ====================================
         ——— WRAPPER
         ===================================== -->
      <div class="wrapper">
         <!-- ====================================
            ——— LEFT SIDEBAR WITH OUT FOOTER
            ===================================== -->
        @include('partials.side')
         <!-- ====================================
            ——— PAGE WRAPPER
            ===================================== -->
         <div class="page-wrapper">
            <!-- Header -->
            @include('partials.header')
            <!-- ====================================
               ——— CONTENT WRAPPER
               ===================================== -->
             @if($errors->count() > 0)
                 <div class="alert alert-danger">
                     <ul class="list-unstyled">
                         @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
                @endif
            @yield('content')
            <!-- Footer -->
            @include('partials.footer')
         </div>
      </div>
      <!-- Card Offcanvas -->
      {{-- @include('admin_layouts.canvas') --}}
      @yield('scripts')
      <script src="{{asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('backend/assets/plugins/simplebar/simplebar.min.js')}}"></script>
      <script src="{{asset('backend/unpkg.com/hotkeys-js%403.8.1/dist/hotkeys.min.js')}}"></script>
      <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
      <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
      <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
      <script src="{{asset('backend/assets/plugins/daterangepicker/moment.min.js')}}"></script>
      <script src="{{ asset('backend/cdn.quilljs.com/1.3.6/quill.js') }}"></script>
      <script src="{{ asset('backend/assets/plugins/toaster/toastr.min.js') }}"></script>
      <script src="{{ asset('backend/assets/js/mono.js') }}"></script>
      <script src="{{ asset('backend/assets/js/map.js') }}"></script>
      <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
      <!-- JS for Demo -->
   </body>
</html>

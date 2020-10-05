<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <head>
         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title>Login</title>
       <meta name="csrf-token" content="{{ csrf_token() }}">
         <!-- GOOGLE FONTS -->
         <link href="{{ asset('backend/fonts.googleapis.com/cssbf7a?family=Karla:400,700|Roboto') }}" rel="stylesheet">
         <link href="{{asset('backend/assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
         <link href="{{asset('backend/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
         <!-- PLUGINS CSS STYLE -->
         <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
         <!-- MONO CSS -->
         <link id="main-css-href" rel="stylesheet" href="{{asset('backend/assets/css/mono.css')}}" />
         <!-- CSS for Demo -->
         <link rel="stylesheet" href="{{asset('backend/assets/options/optionswitch.css')}}" />
         <!-- FAVICON -->
         <link href="{{asset('backend/assets/img/favicon.png')}}" rel="shortcut icon" />
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
         <![endif]-->
         <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
   </head>
   </head>
   <body class="bg-light-gray" id="body">
         <div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
                <div class="row justify-content-center">
                   <div class="col-lg-6 col-md-10">
                      <div class="card card-default mb-0">
                         <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                               <a class="w-auto pl-0" href="index-2.html">
                               <img src="backend/assets/img/logo.png" alt="Mono">
                               <span class="brand-name text-dark">CRUD Examination</span>
                               </a>
                            </div>
                         </div>
                         <div class="card-body px-5 pb-5 pt-0">
                            <form method="POST" action="{{ route('login') }}">
                                   @csrf
                               <div class="row">
                                  <div class="form-group col-md-12 mb-4">
                                     <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp"
                                        placeholder="email"  name="email" value="oluwatosinolamilekan@gmail.com">
                                  </div>
                                  <div class="form-group col-md-12 ">
                                     <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" value="password"> 
                                  </div>
                                  <div class="col-md-12">
                                     <div class="d-flex justify-content-between mb-3">
                                        <div class="custom-control custom-checkbox mr-3 mb-3">
                                           <input type="checkbox" class="custom-control-input" id="customCheck2" v-model="form.remember">
                                           <label class="custom-control-label" for="customCheck2">Remember me</label>
                                        </div>
                                        <a class="text-color" href="#"> Forgot password? </a>
                                     </div>
                                     <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>
                                  </div>
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
          </div>
      </div>
    </div>
   </body>
</html>

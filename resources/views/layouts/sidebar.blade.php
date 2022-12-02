<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
      {{-- EDITAR CONFORME MODELO ATUAL DO SIDEBAR --}}
      
      
      
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">


        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


          <!-- bootstrap css -->
          {{-- <link rel="stylesheet" href="temp-css/bootstrap.min.css" /> --}}
          <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
          <!-- site css -->
          {{-- <link rel="stylesheet" href="style.css" /> --}}
          <link href="{{ asset('/assets/style.css') }}" rel="stylesheet">
          <!-- responsive css -->
          {{-- <link rel="stylesheet" href="css/responsive.css" /> --}}
          <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">
          <!-- color css -->
          {{-- <link rel="stylesheet" href="css/colors.css" /> --}}
          <link href="{{ asset('/assets/css/colors.css') }}" rel="stylesheet">
          <!-- select bootstrap -->
          {{-- <link rel="stylesheet" href="css/bootstrap-select.css" /> --}}
          <link href="{{ asset('/assets/css/bootstrap-select.css') }}" rel="stylesheet">
          <!-- scrollbar css -->
          {{-- <link rel="stylesheet" href="css/perfect-scrollbar.css" /> --}}
          <link href="{{ asset('/assets/css/perfect-scrollbar.css') }}" rel="stylesheet">
          <!-- custom css -->
          {{-- <link rel="stylesheet" href="css/custom.css" /> --}}
          <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
          
          
    </head>
    <body class="dashboard dashboard_1">
        <div class="full_container">
           <div class="inner_container">
              <!-- Sidebar  -->
              <nav id="sidebar">
                 <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                       <div class="logo_section">
                          <a href="#"><img class="logo_icon img-responsive" src="assets/images/logo/logo_icon.png" alt="#" /></a>
                       </div>
                    </div>
                    <div class="sidebar_user_info">
                       <div class="icon_setting"></div>
                       <div class="user_profle_side">
                          <div class="user_img"><img class="img-responsive" src="assets/images/layout_img/user_img.jpg" alt="#" /></div>
                          <div class="user_info">
                             
                           {{-- NOME DO OP --}}
                              <h6>OP X</h6>
                              {{-- ONLINE ICON --}}
                             <p><span class="online_animation"></span> Online</p>

                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">

                     {{-- LINKS DO SIDE BAR --}}

                     {{-- php para verificar acesso é valido ! 
                              usando diretivas laravel --}}
                     
                     {{-- @if(($codFuncao) === 'supervisor')
                        <li><a href="producao"><i class="fa fa-clock-o orange_color"></i> <span>producao</span></a></li>
                     @endif --}}

                       <li><a href="producao"><i class="fa fa-clock-o orange_color"></i> <span>producao</span></a></li>
                       <li><a href="web"><i class="fa fa-clock-o orange_color"></i> <span>Web</span></a></li>
                       <li><a href="retaguarda"><i class="fa fa-clock-o orange_color"></i> <span>Retaguarda</span></a></li>
                       <li><a href="chat"><i class="fa fa-clock-o orange_color"></i> <span>Chat</span></a></li>
                       <li><a href="/sistraf/public"><i class="fa fa-clock-o orange_color"></i> <span>Inicio</span></a></li>
                    </ul>
                 </div>
              </nav>
              <!-- end sidebar -->
              <!-- right content -->
              <div id="content">
                 <!-- topbar -->
                 <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                       <div class="full">
                          <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                          <div class="logo_section">
                             <a href="#"><img class="img-responsive" src="assets/images/logo/logo_icon.png" alt="#" /></a>
                             <span style="color: white; font-size: 25px;">SISTRAF V2</span>
                          </div>
                          <div class="right_topbar">
                           <span>10:00</span>
                          </div>
                       </div>
                    </nav>
                 </div>
                 <!-- end topbar -->
                 <!-- dashboard inner -->
                 @yield('content')
                 <!-- end dashboard inner -->
              </div>
           </div>
        </div>
        
        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min') }}"></script>
        <script src="{{ asset('assets/js/animate') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel') }}"></script>
        <script src="{{ asset('assets/js/Chart.min') }}"></script>
        <script src="{{ asset('assets/js/Chart.bundle.min') }}"></script>
        <script src="{{ asset('assets/js/utils') }}"></script>
        <script src="{{ asset('assets/js/analyser') }}"></script>
        <script src="{{ asset('assets/js/perfect-scrollbar.min') }}"></script>
        
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
        
        <script src="{{ asset('assets/js/custom') }}"></script>
        <script src="{{ asset('assets/js/chart_custom_style1') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
   <script>

      conn = new WebSocket('ws://localhost:8086/');

      conn.onopen = function(e){
         console.log("deu BoA");
      }

      conn.onmessage = function(e){
         console.log(e+"esta online");
      }
         
   </script>
   </body>
</html>



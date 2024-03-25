<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Administração</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('vendor/select2/select2.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="">
    
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                            <a class="js-arrow" href="#">Cadastros </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                                 <li>
                                    <a href="{{route('pegar_formulario')}}">Funcionario</a>
                                </li>
                                <li>
                                    <a href="{{route('pegar_formulario_cursos')}}">Curso</a>
                                </li>
                                <li>
                                   <a href="{{route('formulario_propinas')}}">Propinas</a>
                                </li>
                                <li>
                                    <a href="{{route('pegar_formulario_estudante')}}">Estudante</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Listar </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                 <li>
                                    <a href="{{route('ver_funcionario')}}">Funcionario</a>
                                </li>
                                <li>
                                         <a href="{{route('ver_dado_curso')}}">Curso</a>
                                </li>
                                <li>
                                         <a href="{{route('ver_dado_propina')}}">Propinas</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul> 
                  </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route('admin')}}">
                    Os Gigantes
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                
                    <ul class="list-unstyled navbar__list">
                   
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Cadastros </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('pegar_formulario')}}">Funcionario</a>
                                </li>
                                
                                <li>
                                    <a href="{{route('pegar_formulario_cursos')}}">Curso</a>
                                </li>
                               
                                <li>
                                   <a href="{{route('formulario_propinas')}}">Propias</a>
                                </li>
                                <li>
                                    <a href="{{route('pegar_formulario_estudante')}}">Estudante</a>
                                </li>
                               
                            </ul>
                        </li> 
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Listar </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="{{route('ver_funcionario')}}">Funcionarios</a>
                                </li>
                                
                                <li>
                                         <a href="{{route('ver_dado_curso')}}">Cursos</a>
                                </li>
                                <li>
                                         <a href="{{route('ver_dado_propina')}}">Propinas</a>
                                </li>
                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="">Pagamento</a>
                        </li>
                    
                    </ul>
                </nav>
            </div>
                                                	
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                @csrf
                                <input class="au-input au-input--xl" type="text" name="pesquisa" placeholder="pesquizar" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
 
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        
                                            <img src=""  alt="Administrator" />
                                            
                                        </div>
                                        <div class="content">
                                        <p>{{Auth::user()->name}}</p>
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                       
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src=""/>
                                                    </a>
                                                </div>
                                            
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                               
                                                <a href="{{route('logaut')}}" >
                                                    <i class="zmdi zmdi-power"></i>Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" >
                            @if($controlo==1)
                            <div class="main-content">
                                <div class="section__content section__content--p30">
                                    <div class="container-fluid">
                                        <div class="row">
                                        </div>
                                                <div class="row m-t-25">
                                                    <div class="col-sm-6 col-lg-3">
                                                        <div class="overview-item overview-item--c1">
                                                            <div class="overview__inner">
                                                                <div class="overview-box clearfix">
                                                                    <div class="icon">
                                                                        <i class="zmdi zmdi-account-o"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h2>{{$quantidadeEstudantes}}</h2>
                                                                        <span>Estudante Cadastrados</span>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-chart">
                                                                    <canvas id="widgetChart1"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3">
                                                        <div class="overview-item overview-item--c2">
                                                            <div class="overview__inner">
                                                                <div class="overview-box clearfix">
                                                                    <div class="icon">
                                                                    <i class="zmdi zmdi-account-o"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h2>{{$quantidadeFuncio}}</h2>
                                                                        <span>Funcionario Cadastrados</span>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-chart">
                                                                    <canvas id="widgetChart2"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3">
                                                        <div class="overview-item overview-item--c3">
                                                            <div class="overview__inner">
                                                                <div class="overview-box clearfix">
                                                                    <div class="icon">
                                                                        <i class="zmdi zmdi-calendar-note"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h2>{{$quantidadeCurso}}</h2>
                                                                        <span>Curso Cadastrados</span>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-chart">
                                                                    <canvas id="widgetChart3"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                   
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                            @else
                                 @yield('conteudo')
                            @endif
                          
                        </div>               
                    </div>
                </div>
            </div>

            @if(session("success"))
                <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-success" id="exampleModalLabel">Concluido</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <h5>{{session("success")}}</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                            
                        </div>
                        </div>
                    </div>
               </div>
            @endif
            @if(session("error"))
                <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-success" id="exampleModalLabel">Concluido</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <h5>{{session("error")}}</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                            
                        </div>
                        </div>
                    </div>
               </div>
            @endif

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/js/main.js')}}"></script>
    <script src="{{asset('js/js/cust.js')}}"></script>

     <!-- NOVO JS-->
    <script>
        $('#modalSuccess').modal('show')
    </script>

</body>

</html>
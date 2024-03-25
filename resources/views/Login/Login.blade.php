<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('estilo/css/estiloLogin.css')}}">
    <!-- Bootstrap CSS-->
    <link href="{{asset('estilo/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <title>Login</title>
</head>
<body>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Login</h2>
            </div>
            <form  action="" method="post"  class="form">
                @csrf
                <div class="form-control ">
                    <label for="username">Nome de utilizador</label>
                    <input type="text" name ="user" id="username" placeholder="Digite seu nome de usuario...">
                    @error('user')
                         <span class = "text-danger">{{ $message }}</span>
                    @enderror
               </div>
               <div class="form-control ">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha"  name ="password" placeholder="Digite sua Senha...">
                    @error('password')
                         <span class = "text-danger" >{{ $message }}</span>
                    @enderror 
                </div>
                <button type="submit">Enviar</button>
                
            </form>
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
        <script src="{{asset('js/jsLogin.js')}}"></script>
         <!-- NOVO JS-->
    <script>
        $('#modalSuccess').modal('show')
    </script>

</body>
</html>
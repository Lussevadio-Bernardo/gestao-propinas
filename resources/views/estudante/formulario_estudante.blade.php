@extends('Admin.index')
@section('conteudo')       
     <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Cadastrar Estudante</div>
                    <div class="card-body">
                        <hr>
                            <form action="{{route('enviar_dado_estudante')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                               @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Nome</label>
                                    <input id="cc-pament" name="nome" type="hour" class="form-control"  placeholder="Nome">
                                    @error('nome')
                                       <span class = "text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                  

                                 <div class="row">
                                        
                                        <div class="col-6">
                                                <label for="exampleSelectGender">Genero</label>
                                                <div class="input-group">
                                                    <select name="genero" class="form-control" id="exampleSelectGender">
                                                             <option>Masculino</option>
                                                            <option>Feminino</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group has-success">
                                                                <label for="cc-name" class="control-label mb-1">Data de nascimento</label>
                                                                <input class="form-control" type="date" name="data_nasci" id="data_atendimento" class="inputUser" required>
                                                                @error('data_atendimento')
                                                                     <span class = "text-danger">{{ $message }}</span>
                                                               @enderror 
                                                        </div> 
                                                        </div> 
                                                <div class="col-6">
                                                    <label for="exampleInputCity1">Número do BI</label>
                                                    <div class="input-group">
                                                        <input type="text"  name="bi" class="form-control" id="exampleInputCity1" placeholder="Nº do Bilhete">
                                                    </div>
                                                    @error('bi')
                                                       <span class = "text-danger">{{ $message }}</span>
                                                     @enderror
                                                </div>
                                 <div class="col-6">
                                       <div class="form-group">
                                            <label for="cc-name" class="control-label mb-1">E-mail</label>
                                            <input id="cc-name" name="email" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Email">
                                            @error('email')
                                            <span class = "text-danger">{{ $message }}</span>
                                            @enderror 
                                         </div>
                                     </div>
                                    <div class="col-6">
                                       <div class="form-group">
                                             <label for="cc-exp" class="control-label mb-1">Telemovel</label>
                                               <input id="cc-exp" name="terminal" type="tel" class="form-control cc-exp" placeholder="Telemovel" data-val="true" data-val-required="Please enter the card expiration"
                                                data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                @error('terminal')
                                                  <span class = "text-danger">{{ $message }}</span>
                                                @enderror 
                                              </div>
                                     </div>
                                     
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <label>Escolha a Imagem</label>
                                                        <input type="file" name="imagem" id="image" > 
                                                        @error('imagem')
                                                          <span class = "text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                 <div class="form-group">
                                                    <label for="exampleInputCity1">Curso</label>
                                                    <div class="input-group">
                                                            <select name="curso" class="form-control" id="exampleSelectGender">
                                                              @foreach($curso as $cursos)
                                                                <option>{{$cursos->nome}}</option>
                                                              @endforeach
                                                            </select>
                                                    </div>
                                                 </div>
                                                </div>
                                                <div class="col-6">
                                                 <div class="form-group">
                                                    <label for="exampleInputCity1">Classe</label>
                                                    <div class="input-group">
                                                            <select name="classe" class="form-control" id="exampleSelectGender">
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                            </select>
                                                    </div>
                                                 </div>
                                                </div>
                                            </div>
                                            <div><br>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <span id="payment-button-amount">Submeter</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                             </div>
                        </div>
@endsection
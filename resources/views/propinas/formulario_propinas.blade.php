@extends('Admin.index')
@section('conteudo')       
     <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Cadastrar Propinas</div>
                    <div class="card-body">
                        <hr>
                            <form action="{{route('enviar_dado_propinas')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                               @csrf
                                
                                 <div class="row">
                                   
                                 <div class="col-12">
                                       <div class="form-group">
                                            <label for="cc-name" class="control-label mb-1">Propina</label>
                                            <input id="cc-name" name="propinas" type="valor" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Valor propina">
                                            @error('propinas')
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
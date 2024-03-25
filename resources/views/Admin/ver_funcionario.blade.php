@extends('admin.index')

@section('conteudo') 
<div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Funcionarios</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-right">
                            <a href="{{route('pegar_formulario')}}">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add</button>
                            </a>
                           
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                <th> Nome </th>
                                <th> Genero </th> 
                                <th> Terminal</th>
                                <th> Nº Bilhete </th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($dados_funcionario as $lis)
                                        @if($lis->id!=Auth::user()->id)
                                                    <tr class="spacer"></tr>
                                                    <tr class="tr-shadow">
                                            
                                                    <td> {{$lis->name}}</td>
                                                    <td> {{$lis->genero}} </td>
                                                    <td> {{$lis->telemovel}} </td>
                                                    <td> {{$lis->num_bi}} </td>
                                                    <td>
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <a href="" >
                                                                <button class="btn btn-primary" title="Ver Detalhes do Funcionario" data-toggle="tooltip">ver</button>
                                                            </a>
                                                            
                                                            <a href="">
                                                            <button class="btn btn-danger" title="Excluir Funcionario" data-toggle="tooltip">Excluir</button>
                                                            </a>
                                                        </div>
                    
                                                    </div>
                                                    </td>
                                                </tr>
                                        @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
        </div>
 @endsection 
                
               


@extends('admin.index')

@section('conteudo') 
<div class="col-md-12">
  <!-- DATA TABLE -->
  <h3 class="title-5 m-b-35">Curso</h3>
  <div class="table-data__tool">
      <div class="table-data__tool-right">
        <a href="{{route('pegar_formulario_cursos')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
              <i class="zmdi zmdi-plus"></i>add</button></a>
          
      </div>
  </div>
  <div class="table-responsive table-responsive-data2">
      <table class="table table-data2">
          <thead>
              <tr>
              <th> Nome </th>
              <th> Area </th> 
              <th></th>
              </tr>
          </thead>
          <tbody>
          @foreach($curso as $lis)
              <tr class="spacer"></tr>
              <tr class="tr-shadow">
        
                <td> {{$lis->nome}}</td>
                <td> {{$lis->area}} </td>
                <td>    </td>
                  <td>
                  <div class="card-body">
                        <a href="">
                            <button class="btn btn-danger" title="Excluir Curso" data-toggle="tooltip">Excluir</button>
                         </a>
                     </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <!-- END DATA TABLE -->
</div>





@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CursoModel;

class CursoController extends Controller
{
    public function pegar_formulario_curso(){
        $controlo=0;
        return view('curso/formulario_curso',compact('controlo'));
    }

    public function enviar_dados_curso(Request $request){
        $id_admin=Auth::user()->id;
        
       $dados = CursoModel::create([
          'nome'=>$request->nome,
          'area'=>$request->area,
          'id_funcionario'=>$id_admin
       ]); 
       if($dados!=null){
        return redirect()->route('admin')->with("success"," Curso Cadastrado com sucesso!");
    }else{
        return redirect()->route('admin')->with("error","Curso Não Castrado!");
    }

    }

    public function listar_curso(){
        $controlo=0;
        $curso=CursoModel::get();
        return view('curso.Listtar_curso',compact('curso','controlo'));
    }
    
}

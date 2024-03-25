<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Models\FuncionarioModel;
use App\Models\CursoModel;
use App\Models\EstudanteModel;
use Illuminate\Support\Facades\DB;
class FuncionarioController extends Controller
{
    public function admin(){
        $controlo=1;
        $quantidadeFuncio=FuncionarioModel::count();
        $quantidadeCurso=CursoModel::count();
        $quantidadeEstudantes=EstudanteModel::count();
        return view('admin/index',compact('controlo','quantidadeFuncio','quantidadeCurso','quantidadeEstudantes'));
    }
    public function pegar_formulario(){
        $controlo=0;
        return view('admin/formulari_funcionario',compact('controlo'));
    }
    public function enviar_dados(Request $request){
       
        $user = User::create([
            'name' => $request->nome,
            'email' =>  $request->email,
            'genero'=>$request->genero,
            'password' => Hash::make('$request->bi'),
            'telemovel'=> $request->terminal,
            'num_bi'=> $request->bi,
            'data_nascimento'=> $request->data_nasc,
        ]);
        event(new Registered($user));
        $quantidadeFuncionario=FuncionarioModel::count();
        $dados_funcio=FuncionarioModel::create([
           
            'id_funcionario'=> $user->id,
            'cargo'=> $request->cargo,
            'numero_identificacao'=>$quantidadeFuncionario+1
        ]);
        if($dados_funcio!=null && $user!=null){
            return redirect()->route('admin')->with("success"," Funcionario Cadastrado com sucesso!");
        }else{
            return redirect()->route('admin')->with("error","Funcionario Não Castrado!");
        }
    }

    public function listar_funcionario(){
        $controlo=0;
        $dados_funcionario=DB::table('users')->join('funcionarios','users.id','=','funcionarios.id_funcionario')
        ->select('users.*','funcionarios.*')->get();
       return view('admin.ver_funcionario',compact('dados_funcionario','controlo'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstudanteModel;
use Illuminate\Support\Facades\Hash;
use App\Models\CursoModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class EstudanteController extends Controller
{
    public function chamar_formulario_estudane(){
        $controlo=0;
        $curso=CursoModel::get();
        return view('estudante/formulario_estudante',compact('curso','controlo'));
    }
    public function enviar_dado_estudantes(Request $request){
        $id_admin=Auth::user()->id;
        $curso=CursoModel::where("nome","=",$request->curso)->first();
        $data_atual= Carbon::now();
        $user = User::create([
            'name' => $request->nome,
            'email' =>  $request->email,
            'genero'=>$request->genero,
            'password' => Hash::make('$request->bi'),
            'telemovel'=> $request->terminal,
            'num_bi'=> $request->bi,
            'data_nascimento'=> $request->data_nasc,
        ]);
        $quantidadeEstudate=EstudanteModel::count();
        
        $dados_estudante=EstudanteModel::create([
            'id_estudante'=> $user->id,
            'classe'=> $request->classe,
            'num_processo'=>$quantidadeEstudate+1,
            'data_matricula'=>$data_atual,
            'id_funcionario'=>$id_admin,
            'id_curso'=>$curso->id_curso
        ]);
        if($dados_estudante!=null && $user!=null){
            return redirect()->route('admin')->with("success"," Estudante Cadastrado com sucesso!");
        }else{
            return redirect()->route('admin')->with("error","Estudante Não Castrado!");
        }
    }
}

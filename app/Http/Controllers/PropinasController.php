<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CursoModel;
use App\Models\PropinasModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PropinasController extends Controller
{
    public function pegar_formulario_propinas(){
        $controlo=0;
        $curso=CursoModel::get();
        return view('propinas/formulario_propinas',compact('curso','controlo'));
    }
    public function enviar_dados_propinas(Request $request){
        $id_admin=Auth::user()->id;
        $curso=CursoModel::where("nome","=",$request->curso)->first();
        $propinas=PropinasModel::get();
        foreach($propinas as $propi){
            if($propi->id_curso==$curso->id_curso && $propi->classe==$request->classe){
                return redirect()->route('formulario_propinas')->with("error","Esta classe deste Curso já tem uma propina definida!");
            }
        }
        $dados_propinas= PropinasModel::create([
            'classe'=>$request->classe,
            'valor'=>$request->propinas,
            'id_funcionario'=>$id_admin,
            'id_curso'=>$curso->id_curso
        ]);

        if($dados_propinas!=null){
            return redirect()->route('admin')->with("success"," Propinas Cadastrado com sucesso!");
        }else{
            return redirect()->route('admin')->with("error","Propinas Não Castrado!");
        }
    }

    public function listar_propinas(){
        $controlo=0;
        $dados_propina=DB::table('propinas')->join('curso','propinas.id_curso','=','curso.id_curso')
        ->select('propinas.*','curso.*')->get();
        
       return view('propinas.listar_propinas',compact('dados_propina','controlo'));
    }
}

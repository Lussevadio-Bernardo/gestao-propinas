<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\PropinasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class,'index'])->name('inicio');
Route::post('/Login',[LoginController::class,'logar'])->name('loga');
Route::get('/logaut',[LoginController::class,'destroy'])->name('logaut');

// Routas do funcionario
Route::get('/Area/Administrativa', [FuncionarioController::class,'admin'])->name('admin');
Route::get('/Cadastrar/Funcionario', [FuncionarioController::class,'pegar_formulario'])->name('pegar_formulario');
Route::post('/Enviar/Cadastrar/Funcionario', [FuncionarioController::class,'enviar_dados'])->name('enviar_dado');
Route::get('/Ver/Dados/Funcionario', [FuncionarioController::class,'listar_funcionario'])->name('ver_funcionario');

// Routa Curso

Route::get('/Cadastrar/Curso', [CursoController::class,'pegar_formulario_curso'])->name('pegar_formulario_cursos');
Route::post('/Enviar/Cadastrar/Curso', [CursoController::class,'enviar_dados_curso'])->name('enviar_dado_curso');
Route::get('/Listar/Curso',[CursoController::class,'listar_curso'])->name('ver_dado_curso');

//Route Estudante
Route::get('/Cadastrar/Estudante', [EstudanteController::class,'chamar_formulario_estudane'])->name('pegar_formulario_estudante');
Route::post('/Enviar/Cadastrar/Estudante', [EstudanteController::class,'enviar_dado_estudantes'])->name('enviar_dado_estudante');

// Routas Propinas
Route::get('/Cadastrar/propinas', [PropinasController::class,'pegar_formulario_propinas'])->name('formulario_propinas');
Route::post('/Enviar/Cadastrar/Propinas', [PropinasController::class,'enviar_dados_propinas'])->name('enviar_dado_propinas');
Route::get('/Listar/Propinas',[PropinasController::class,'listar_propinas'])->name('ver_dado_propina');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

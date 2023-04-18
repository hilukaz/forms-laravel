<?php

use App\Models\Agendamentos;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AgendamentosController;

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
Route::get('/user/{id}', [AgendamentosController::class, 'show']);

Route::post('/post',[AgendamentosController::class, 'show']);

Route::get('/consulta', function (Request $request) {
    
    
    return view('consulta');
});

Route::get('/', function () {
   
     $primeiroRegistro = new Agendamentos;
    $primeiroRegistro-> name="Rodrigo Alves";
    $primeiroRegistro-> origem="Whatsapp";
    $primeiroRegistro-> data_contato="2023-03-28";
    $primeiroRegistro-> telefone="(11)98522-9966";
    $primeiroRegistro-> observacao="Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
    
    $primeiroRegistro->save();
   return view('index'); 
});
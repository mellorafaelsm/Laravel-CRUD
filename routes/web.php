<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    $clientes = Cliente::All();
    return view('ver',['clientes'=>$clientes]);
});

Route::post('/cadastrar-cliente', function (Request $request) {

    Cliente::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'telefone' => $request->telefone,
        'rua' => $request->rua,
        'numero' => $request->numero,
        'complemento' => $request->complemento,
        'bairro' => $request->bairro,
        'cep' => $request->cep,
        'cidade' => $request->cidade,
        'estado' => $request->estado
    ]);
    echo "Cliente cadastrado com sucesso";

    //carrega lista de clientes
    return view('ver',['clientes'=>Cliente::All()]);
});

Route::post('/editar-cliente/{id}', function (Request $request, $id) {
    $cliente = Cliente::find($id);
    $cliente->update([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'telefone' => $request->telefone,
        'rua' => $request->rua,
        'numero' => $request->numero,
        'complemento' => $request->complemento,
        'bairro' => $request->bairro,
        'cep' => $request->cep,
        'cidade' => $request->cidade,
        'estado' => $request->estado
    ]);

    echo "Cliente editado com sucesso";
    //carrega lista de clientes
    return view('ver',['clientes'=>Cliente::All()]);
});

// Route::get('/cadastrar'){
//     return view('inicio');
// });

Route::get('/cadastrar-cliente', function(){
    return view('inicio');
});

Route::get('/editar-cliente/{id}', function ($id){
    $cliente = Cliente::find($id);
    return view('editar', ['cliente' => $cliente]);
});

Route::get('/excluir-cliente/{id}', function (Request $request, $id) {
    $cliente = Cliente::find($id);
    $cliente->delete();
    echo "Cliente excluido com sucesso";
    //carregar lista na tela
    return view('ver',['clientes'=>Cliente::All()]);
});
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'] ); //Rota barra que retorna welcome que é uma view predefinida do php
Route::get('/events/create', [EventController::class, 'create'] );
Route::post('/events', [EventController::class, 'store']);

Route::get('/contatos', function () {
    return view('contatos');
}); //Nova rota que recebe os dados e acessa a url, a rota /contact que possui um arquivo de blade.php

Route::get('/produtos', function () {

    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos_testes/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);

});
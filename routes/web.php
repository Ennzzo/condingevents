<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Matheus";
    $idade = "29";

    $vetor = [10,20,30,40,50];

    $nomes = ["Matheus", "Maria", "João", "Saulo"];

    return view('welcome',
    [
    'nome' => $nome, 
    'idade' => $idade, 
    'profissao' => "Programador",
    'vetor' => $vetor,
    'nomes' => $nomes
    ]);
}); //Rota barra que retorna welcome que é uma view predefinida do php

Route::get('/contatos', function () {
    return view('contatos');
}); //Nova rota que recebe os dados e acessa a url, a rota /contact que possui um arquivo de blade.php

Route::get('/produtos', function () {
    return view('produtos');
});
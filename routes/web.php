<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/passagem/dados', function () {
    return view('exemplos/passagem_dados', [
        'nome' => 'TreinaWeb',
        'curso' => 'Laravel'
    ]);
});

Route::get('/exibicao/json', function () {
    return view('exemplos/exibicao_json', [
        'posts' => [
            [
                "titulo" => "Novidades do Laravel 10",
                "conteudo" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod"
            ],
            [
                "titulo" => "Novidades do Blade",
                "conteudo" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod"
            ]
        ]
    ]);
});

Route::get('/frameworks/js', function () {
    return view('exemplos.frameworks_js');
});

Route::get('/php/comentarios', function () {
    return view('exemplos.php_comentarios');
});

Route::get('/condicional/if', function () {
    return view('exemplos.condicional_if', [
        'comentarios' => -3
    ]);
});

Route::get('/condicional/switch', function () {
    return view('exemplos.condicional_switch', [
        'mes' => ''
    ]);
});



<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('pagina-home');

Route::get('/news', function () {
    return view('news');
})->name('pagina-news');

Route::get('/prodotti', function () {
    $data = config('pasta');
    

    $collection = collect($data);
    $pasta_lunga = $collection->where('tipo','lunga');
    $pasta_corta = $collection->where('tipo','corta');
    $pasta_cortissima = $collection->where('tipo','cortissima');
    

    // $pasta_lunga = array_filter($data, function($elemento){
    //     return $elemento['tipo'] == 'lunga';
    // });

    $pasta = [
        'formati' => [
            'lunghe' => $pasta_lunga,
            'corte' => $pasta_corta,
            'cortissime' => $pasta_cortissima,
        ]
    ];

    return view('products', $pasta);
})->name('pagina-prodotti');

Route::get('/dettaglio/{id}', function ($id) {
    $data = config('pasta');

    $pasta = [
        'formato' => $data[$id],
        'id' => $id
    ];
    return view('dettagli', $pasta);
})->name('pagina-dettaglio');

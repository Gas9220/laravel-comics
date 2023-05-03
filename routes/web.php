<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNull;

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
    $data = [
        'comics' => config('comics')
    ];

    return view('comics', $data);
})->name('comics');

Route::get('/comic/{index}', function ($index) {
    if($index > count(config('comics')) - 1){
        $data = [
            'comics' => config('comics')
        ];

        return view('comics', $data);
    } else {
        $comics = config('comics')[$index];
        return view('comics_detail', compact('comics'));

    }
})->name('comics_detail')->where('index', '[0-9]+');

Route::get('/characters', function () {

    return view('default');
})->name('characters');

Route::get('/movies', function () {

    return view('default');
})->name('movies');

Route::get('/tv', function () {

    return view('default');
})->name('tv');

Route::get('/games', function () {

    return view('default');
})->name('games');

Route::get('/collectibles', function () {

    return view('default');
})->name('collectibles');

Route::get('/videos', function () {

    return view('default');
})->name('videos');

Route::get('/fans', function () {

    return view('default');
})->name('fans');

Route::get('/news', function () {

    return view('default');
})->name('news');

Route::get('/shop', function () {

    return view('default');
})->name('shop');
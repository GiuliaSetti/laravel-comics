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
    
    $comics = config('comics');


    //link header
    $links = [
        'characters' => 'characters',
        'comics' => 'comics',
        'movies' => 'movies',
        'tv' => 'tv',
        'games' => 'games',
        'collectibles' => 'collectibles',
        'videos' => 'videos',
        'fans' => 'fans',
        'news' => 'news',
        'shop' => 'shop'
    ];

    //links buy
    $buyLinks = [
        [
            'icon' => 'resources/img/buy-comics-digital-comics.png',
            'title' => 'digital comics'
        ],
        [
            'icon' => 'resources/img/buy-comics-merchandise.png',
            'title' => 'dc merchandise'
        ],
        [
            'icon' => 'resources/img/buy-comics-subscriptions.png',
            'title' => 'subscription'
        ],
        [
            'icon' => 'resources/img/buy-comics-shop-locator.png',
            'title' => 'comic shop locator'
        ],
        [
            'icon' => 'resources/img/buy-dc-power-visa.svg',
            'title' => 'dc power visa'
        ]
    ];

    return view('home', compact('comics', 'links', 'buyLinks'));
})->name('home');

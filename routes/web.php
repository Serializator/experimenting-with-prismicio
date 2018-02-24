<?php

use Prismic\Api as PrismicIO;
use Prismic\Document;

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

Route::get('/', function (PrismicIO $prismic) {
    $document = $prismic->getSingle('welcome-page');
    return view('welcome', compact('document'));
});

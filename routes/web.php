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

    return view('welcome');

})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feature', function () {
    return view('feature');
})->name('feature');

Route::get('/class', function () {
    return view('class');
})->name('class');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/single', function () {
    return view('single');
})->name('single');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/localization', function () {
    
    $data = request()->all();

    session()->put('lang', $data['lang']);

    return back();


})->name('localization');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
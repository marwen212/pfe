<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ChequeController;

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
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('personne', \App\Http\Controllers\PersonneController::class);
    Route::resource('marchand', \App\Http\Controllers\MarchandController::class);
    //Route::get('/search', 'App\Http\Controllers\ChequeController@search')->name('cheque.create');
    //Route::get('/search','App\Http\Controllers\ChequeController@search')->name('cheque.create');
    //Route::get('/search/action', 'App\Http\Controllers\ChequeController@action')->name('search.action');

    /*Route::get('/marchand', 'App\Http\Controllers\marchand@index')->name('marchand.index');
    Route::get('/marchand/create', 'App\Http\Controllers\marchand@create')->name('marchand.create');
    Route::get('/marchand/edit', 'App\Http\Controllers\marchand@edit')->name('marchand.edit');
    Route::get('/marchand/show', 'App\Http\Controllers\marchand@show')->name('marchand.show');
    Route::get('/personne', 'App\Http\Controllers\personne@index')->name('personne.index');
    Route::get('/personne/create', 'App\Http\Controllers\personne@create')->name('personne.create');
    Route::get('/personne/edit', 'App\Http\Controllers\personne@edit')->name('personne.edit');
    Route::get('/personne/show', 'App\Http\Controllers\personne@show')->name('personne.show');*/

    Route::post('/profile', 'App\Http\Controllers\UserController@postProfile')->name('user.postProfile');
});
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::resource('achat', \App\Http\Controllers\AchatController::class);
Route::resource('reclamation', \App\Http\Controllers\ReclamationController::class);
//Route::get('/reclamation', 'App\Http\Controllers\ReclamationController@index')->name('reclamation.index');

//Route::get('/achats/show/{id}', 'App\Http\Controllers\AchatController@show')->name('achats.show');




//Route::get('/cheques/create', 'App\Http\Controllers\ChequeController@create')->name('cheque.create');
//Route::post('/cheques/createe', 'App\Http\Controllers\ChequeController@store')->name('cheque.store');

//Route::get('/cheques', 'App\Http\Controllers\ChequeController@index')->name('cheque.index');




Route::get('/reclamation', 'App\Http\Controllers\ReclamationController@index')->name('reclamation.index');
Route::get('/reclamation/1', 'App\Http\Controllers\ReclamationController@show')->name('reclamation.show');

//Route::get('/cheques/create', 'App\Http\Controllers\ChequeController@show')->name('cheque.create');
//Route::get('/cheques/show/{id}', 'App\Http\Controllers\ChequeController@show')->name('cheque.show');
Route::resource('cheque', \App\Http\Controllers\ChequeController::class);


/*Route::get('/cheque/create', 'App\Http\Controllers\ChequeController@create')->name('cheque.create');
Route::get('/cheque/printe', 'App\Http\Controllers\ChequeController@imprimer')->name('cheque.printe');*/


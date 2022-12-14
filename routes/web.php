<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\TaskController;

  

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

  

// Route::get('/', function () {

//     return view('welcome');

// });

  

Auth::routes();

  

Route::get('/', [HomeController::class, 'index'])->name('home');

  

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);

    Route::resource('task', TaskController::class);
    Route::get('approve/{id}', [TaskController::class, 'approve'])->name('approve/{id}');
    Route::get('edittask/{id}', [TaskController::class, 'edittask'])->name('edittask/{id}');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

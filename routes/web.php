<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FormulirController;
use App\Http\Controllers\User\FormulirController as UserFormulirController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\UserController;

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

Route::get('/', [PostController::class,'home']);
Route::get('/alur-pendaftaran', [PostController::class,'alur']);
Route::get('/timeline',[PostController::class,'timeline']);
Route::get('/biaya-pendaftaran', [PostController::class,'biaya']);



Route::get('/register', function () {
    return redirect()->route('register');
});

Route::get('/login', function () {
    return redirect()->route('login');
}); 

Auth::routes();



Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware'=>['auth','cek_login:admin']], function() {
    Route::get('/home',[AdminController::class,'index'])->name('admin.home');
    Route::get('/formulir/{form:id}',[FormulirController::class,'show'])->name('admin.view-formulir');
    Route::put('/formulir/{form:id}',[FormulirController::class,'verify'])->name('admin.verify-formulir');    
    Route::delete('/formulir/{form:id}',[FormulirController::class,'destroy'])->name('admin.delete-formulir');
    Route::get('/createPDF/{form:id}',[FormulirController::class,'createPDF'])->name('admin.getPDF');

    Route::get('/users',[AdminUserController::class,'index'])->name('admin.list-users');
    Route::get('/users/add-admin',[AdminUserController::class,'create'])->name('admin.add-admin');
    Route::post('/users',[AdminUserController::class,'store'])->name('admin.store-admin');
    Route::get('/users/{user:id}',[AdminUserController::class,'edit'])->name('admin.edit-admin');
    Route::put('/users/{user:id}',[AdminUserController::class,'update'])->name('admin.update-admin');
    Route::delete('/users/{user:id}',[AdminUserController::class,'destroy'])->name('admin.delete-admin');
});

Route::group(['namespace' => 'User', 'prefix' => 'user','middleware'=>['auth','cek_login:user']], function() {
    Route::get('/home',[UserController::class,'index'])->name('user.home');
    Route::get('/add-formulir/{unit:id}',[UserFormulirController::class,'index'])->name('user.add-formulir');
    Route::post('/add-formulir/{unit:id}',[UserFormulirController::class,'store'])->name('user.store-formulir');
    
    
});
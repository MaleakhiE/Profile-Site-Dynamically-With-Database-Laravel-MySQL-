<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortofoliosController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Menu2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/portofolios', [HomeController::class, 'portofolios']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/about', [HomeController::class, 'about']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

    //Resource
    Route::resource('portofolios', PortofoliosController::class)->middleware('auth');
    Route::resource('about', AboutController::class)->middleware('auth');
    Route::resource('service', ServiceController::class)->middleware('auth');
    Route::resource('skill', SkillController::class)->middleware('auth');
    Route::resource('menu', MenuController::class)->middleware('auth');
    Route::resource('menu2', Menu2Controller::class)->middleware('auth');
    
    Route::get('/admin/about',[AboutController::class, 'index'])->middleware('auth');
    Route::put('/admin/about/{id}',[AboutController::class, 'update'])->middleware('auth');
    
    Route::get('/admin/service',[ServiceController::class, 'index'])->middleware('auth');
    Route::put('/admin/service/{id}',[ServiceController::class, 'update'])->middleware('auth');

    Route::get('/admin/portofolios',[PortofoliosController::class, 'index'])->middleware('auth');
    Route::put('/admin/portofolios/{id}',[PortofoliosController::class, 'update'])->middleware('auth');

    Route::get('/admin/skill',[SkillController::class, 'index'])->middleware('auth');
    Route::put('/admin/skill/{id}',[SkillController::class, 'update'])->middleware('auth');
    
    Route::get('/admin/menu',[MenuController::class, 'index'])->middleware('auth');
    Route::put('/admin/menu/{id}',[MenuController::class, 'update'])->middleware('auth');

    Route::get('/admin/menu2',[Menu2Controller::class, 'index'])->middleware('auth');
    Route::put('/admin/menu2/{id}',[Menu2Controller::class, 'update'])->middleware('auth');
});
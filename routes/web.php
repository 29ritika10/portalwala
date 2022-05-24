<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortalController;


    
Route::get('/',[HomeController::class,"index"])->name("index");
Route::get('/apply',[HomeController::class,"apply"])->name("apply");
Route::post('/apply',[HomeController::class,"store"])->name("store");

Route::prefix("admin")->middleware(["auth"])->group(function(){
    Route::get('/',[AdminController::class,"dashboard"])->name("admin.dashboard");
    Route::get('/manage',[AdminController::class,"manage"])->name("admin.manage");
    Route::get('/portal/create',[PortalController::class,"create"])->name("admin.portal.create");
    Route::post('/portal/store',[PortalController::class,"store"])->name("admin.portal.store");
    Route::get('/portal/manage',[PortalController::class,"index"])->name("admin.portal.index");
    Route::get("/show/{id}",[AdminController::class,"show"])->name("show"); 
    Route::get("/delete/{id}",[AdminController::class,"delete"])->name("delete"); 
    Route::post("/edit/{id}",[AdminController::class,"edit"])->name("edit"); 


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\loginPage;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(userController::class)->group(function (){
    Route::get("/login","login");
    Route::post("/submitLogin", "submitLogin");
    Route::post("/submitSignUp", "submitSignUp");
    Route::get("/signup", "signUp");
});
Route::get("/", [\App\Http\Controllers\homeController::class, "index"]);

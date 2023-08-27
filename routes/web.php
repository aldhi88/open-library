<?php

use App\Http\Controllers\AuthController;
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


Route::get('/', function(){
    
    return redirect()->route('auth.login');

});


Route::prefix('auth')->group(function () {

    Route::controller(AuthController::class)->group(function () {

        Route::name('auth.')->group(function () {

            Route::get('/login', 'login')->name('login'); //auth.login
            Route::post('/login', 'loginPost')->name('login.proses'); //auth.login
            
            Route::get('/register', 'register')->name('register'); //auth.register
            Route::post('/register', 'registerPost')->name('register.proses'); //auth.login

        });


    });

});

// Route::get('/', function () {

//     if(Auth::check()){
//         return redirect()->route('dasboard-index');
//     }else{
//         return redirect()->route('form-login');
//     }
    
// });

// Route::controller(AuthController::class)->group(function () {

//     Route::prefix('auth')->group(function () {
        
//         Route::get('/login', 'login')->name('form-login');
//         Route::get('/register', 'register')->name('form-register');
//         Route::get('/forgot', 'forgot')->name('forgot-login');
//         Route::get('/tes/{id}', 'tes')->name('tes');

//     });
// });



// Route::controller(DashboardController::class)->group(function () {

//     Route::prefix('dashboard')->group(function () {
        
//         Route::get('/index', 'index')->name('dasboard-index');

//     });
// });





<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\AuthController;

// Route::get('/test', function () {
//     Artisan::call('migrate:fresh', [
//         '--seed' => true,
//     ]);

//     return ('Seeder added successfully');
// });

// Route::get('/afficher', function (){
//     $departements =Departement::all();
//     $employes =Employe::all();
//     foreach($departements as $departement){
//         echo "<h2>Departement: {$departement->code_dep} </h2>";       
//     }
// });

Route::get('/', function () {
    return view('welcome');
});


Route::get('/show_register', [AuthController::class, 'show_register'])->name('show_register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');




// Route::get('/profile', function () {
//     return view('profile');
// })->middleware(Check_age::class);
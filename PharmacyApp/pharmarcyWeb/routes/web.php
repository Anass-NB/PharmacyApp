<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\ProfileController;
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

Route::view('/login2', 'auth.login2');
Route::view("/","home");
Route::group(["middleware" => "auth"], function () {
  Route::view("/create-pharmacy", "pages.pharmacies.add")->name("pharmacies.add");
  Route::get("/pharmacies", [PharmacyController::class, "index"])->name("pharmacies.index");
  // Route::get("/create/pharmacy",[PharmacyController::class,"create"])->name("pharmacies.add");
  Route::post("/pharmacies/delete", [PharmacyController::class, "destroy"])->name("pharmacie.delete");
  Route::post("/pharmacies/store", [PharmacyController::class, "store"])->name("pharmacie.store");
  Route::post("/pharmacy/update", [PharmacyController::class, "update"])->name("pharmacy.edit");
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

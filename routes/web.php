<?php

use App\Http\Controllers\Dentist\ListDentistsController;
use App\Http\Controllers\Dentist\CreateDentistsController;
use App\Http\Controllers\Dentist\SaveDentistsController;
use App\Http\Controllers\Dentist\EditDentistsController;
use App\Http\Controllers\Dentist\UpdateDentistsController;
use App\Http\Controllers\Dentist\DeleteDentistsController;

use App\Http\Controllers\Specialty\ListSpecialtiesController;
use App\Http\Controllers\Specialty\CreateSpecialtiesController;
use App\Http\Controllers\Specialty\SaveSpecialtiesController;
use App\Http\Controllers\Specialty\EditSpecialtiesController;
use App\Http\Controllers\Specialty\UpdateSpecialtiesController;
use App\Http\Controllers\Specialty\DeleteSpecialtiesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', ListDentistsController::class)->name('dentists.index');
    Route::get('/dentists/create', CreateDentistsController::class)->name('dentists.create');
    Route::post('/dentists/save', SaveDentistsController::class)->name('dentists.save');
    Route::get('/dentists/edit/{dentist}', EditDentistsController::class)->name('dentists.edit');
    Route::put('/dentists/update/{dentist}', UpdateDentistsController::class)->name('dentists.update');
    Route::delete('/dentists/delete/{dentist}', DeleteDentistsController::class)->name('dentists.delete');

    Route::get('/specialties', ListSpecialtiesController::class)->name('specialties.index');
    Route::get('/specialties/create', CreateSpecialtiesController::class)->name('specialties.create');
    Route::post('/specialties/save', SaveSpecialtiesController::class)->name('specialties.save');
    Route::get('/specialties/edit/{specialty}', EditSpecialtiesController::class)->name('specialties.edit');
    Route::put('/specialties/update/{specialty}', UpdateSpecialtiesController::class)->name('specialties.update');
    Route::delete('/specialties/delete/{specialty}', DeleteSpecialtiesController::class)->name('specialties.delete');

});


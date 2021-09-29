<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('our-team', [PageController::class, 'ourTeam'])->name('our-team');

Route::group(['middleware' => ['auth']], function() {
    Route::get('backend/team', [TeamController::class, 'index'])->name('backend.team.index');
    Route::get('backend/create', [TeamController::class, 'create'])->name('backend.team.create');
    Route::post('backend/team', [TeamController::class, 'store'])->name('backend.team.store');
    Route::get('backend/{team}/edit', [TeamController::class, 'edit'])->name('backend.team.edit');
    Route::put('backend/{team}', [TeamController::class, 'update'])->name('backend.team.update');
    Route::delete('backend/{team}', [TeamController::class, 'destroy'])->name('backend.team.destroy');

    // Clients
    Route::get('backend/clients', [ClientController::class, 'index'])->name('backend.clients.index');
    Route::post('backend/clients', [ClientController::class, 'store'])->name('backend.clients.store');
    Route::get('backend/clients/{client}/edit', [ClientController::class, 'edit'])->name('backend.clients.edit');
    Route::put('backend/clients/{client}', [ClientController::class, 'update'])->name('backend.clients.update');
    Route::delete('backend/clients/{client}', [ClientController::class, 'destroy'])->name('backend.clients.destroy');

});

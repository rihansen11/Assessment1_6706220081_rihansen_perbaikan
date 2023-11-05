<?php
// RIHANSEN ULIHDO PURBA - 6706220081
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VehicleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');

Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi');

Route::get('/transaksiTambah', [TransactionController::class, 'create'])->name('transaksiTambah');

Route::get('/transaksiKembali/{id}', [TransactionController::class, 'edit($id)'])->name('transaksiKembali');

Route::post('/transaksiStore', [TransactionController::class, 'store(Request $request)']);

Route::post('/transaksiUpdate', [TransactionController::class, 'update(Request $request)']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

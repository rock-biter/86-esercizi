<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Mail\NewLead;
use App\Models\Lead;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/posts/{post:slug}/restore', [PostController::class, 'restore'])->name('posts.restore')->withTrashed();

    Route::resource('posts', PostController::class)->parameters([
        'posts' => 'post:slug'
    ])->withTrashed(['show', 'edit', 'update', 'destroy']);
});

require __DIR__ . '/auth.php';

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/new-lead-mail', function () {

    $lead = Lead::first();

    return new NewLead($lead);
});

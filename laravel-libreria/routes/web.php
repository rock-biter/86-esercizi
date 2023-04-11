<?php

use App\Http\Controllers\Guest\PageController;
use App\Models\Book;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'homepage']);

Route::get('/contatti', [PageController::class, 'contacts']);

Route::get('/books/create', function () {

    $book = new Book();

    $book->title = 'Titolo bello';
    $book->author = "Gianni";
    $book->pages = 25;

    $book->save();

    return 'Libro creato';
});

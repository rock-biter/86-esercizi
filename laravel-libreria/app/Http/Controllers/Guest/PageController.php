<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        // $books = Book::all(); //SELECT * FROM books
        $books = Book::where('pages', '>', 300)
            ->orderBy('pages', 'asc')
            ->get(); //SELECT * from books WHERE `pages` > 750;

        $data = [
            'books' => $books
        ];

        return view('welcome', $data);
    }

    public function contacts()
    {
        return view('guest.contacts');
    }
}

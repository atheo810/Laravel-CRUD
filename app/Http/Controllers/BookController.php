<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $book = Book::all();
        return response()->json([
            'Success' => 'true',
            'message' => 'Book List',
            'data' => $book
        ]);
    }
}

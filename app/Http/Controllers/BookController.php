<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        error_log("werkt dit");

        $books = Book::all();

        return $books;
    }
}

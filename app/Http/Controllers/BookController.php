<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getIndex(){
        return view('createbook');
    }

    public function createBook(Request $request){
        Book::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect('/');
    }
}

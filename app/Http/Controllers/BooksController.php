<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    protected function validateRequest(){
        return request()->validate([
            'title' => 'required',
            'author' => 'required',
        ]);
    }
    public function store(){
        Book::create($this->validateRequest());
    }

    public function update(Book $book){
        $book->update($this->validateRequest());
    }
}

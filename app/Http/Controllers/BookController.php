<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    
    public function index(){
        // $books = DB::table('books')->get();
        $books = Book::paginate(4);
        $categories = DB::table('categories')->get();

        return view('home', ['books'=> $books , 'categories' => $categories]);
    }   

    public function showDetail(Book $id){ //
        // $books = Book::paginate(4);
         $categories = DB::table('categories')->get();

         return view('bookDetail', [
            'categories'=>$categories,
            'bookID'=>$id
        ]);
    }
    

}

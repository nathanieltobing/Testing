<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index(){
        $publishers = DB::table('publishers')->get();
        // $books = Book::paginate(4);
         $categories = DB::table('categories')->get();

        return view('publisher', ['publishers'=> $publishers , 'categories' => $categories]);
    }

    public function showDetail(Publisher $id){ //
        // $books = Book::paginate(4);
         $categories = DB::table('categories')->get();

         return view('publisherDetail', [
            'categories'=>$categories,
            'publisherID'=>$id
        ]);
    }
}

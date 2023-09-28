<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
      
    }

    public function showBooks(Category $id){ //
        
         $categories = DB::table('categories')->get();

         return view('category', [
            'categories'=>$categories,
            'categoryID'=>$id
        ]);
    }
}

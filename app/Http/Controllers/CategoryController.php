<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use Input;

class CategoryController extends Controller
{
    //
	 public function show($id)
    {
		$result = Book::Where('category','=',$id)->get();
        return view('subjectsPage', array(
            
            'books'=>$result
        ));
    }
}

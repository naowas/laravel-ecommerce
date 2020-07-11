<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

  
    public function show($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            return view('frontend.pages.categories.show', compact('category'));
        }

        else{
            session()->flash('errors', 'No category by this id');
            return redirect('/');
        }
    }

    


}

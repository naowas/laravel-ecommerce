<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Intervention\Image\ImageManagerStatic as Image;


class CategoriesController extends Controller
{
   public function index()
   {
     $categories = Category::orderBy('id', 'desc') -> get();
     return view('backend.pages.categories.index', compact('categories') );
   }

   public function create(){
       $main_categories = Category::orderBy('name', 'desc')-> where('parent_id', NULL)->get();
        return view('backend.pages.categories.create', compact('main_categories') );

   }

   public function store(Request $request){

     $this->validate($request,[

      'name' => 'required',
      'image' => 'nullable|image',

    ],
    [
      'image.image' => 'only JPG, JPEG, PNG, GIF is allowed',
      'name.required' => 'Provide a categoy name',
    ]);

      $category = new Category();
      $category -> name = $request ->name;
      $category -> description = $request ->description;
      $category -> parent_id = $request ->parent_id;

        if(($request->image)>0){


            $image = $request->file('image');
            $img = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('images/categories/' .$img);
            Image::make($image)->save($location);
            $category -> image = $img;
            
        }
      $category ->save();

      session()->flush('success', 'New Category has been added');
      return redirect()->route('admin.categories');


   }
}

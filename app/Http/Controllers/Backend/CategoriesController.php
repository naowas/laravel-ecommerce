<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;


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

    public function edit($id){

        $main_categories = Category::orderBy('name', 'desc')-> where('parent_id', NULL)->get();

        $category = Category::find($id);

        if(!is_null($category)){
        return view('backend.pages.categories.edit' , compact('category', 'main_categories'));

        }
        else{
          return redirect()->route('admin.categories');
        }





    }


public function update(Request $request, $id){

     $this->validate($request,[

      'name' => 'required',
      'image' => 'nullable|image',

    ],
    [
      'image.image' => 'only JPG, JPEG, PNG, GIF is allowed',
      'name.required' => 'Provide a categoy name',
    ]);

      $category = Category::find($id);
      $category -> name = $request ->name;
      $category -> description = $request ->description;
      $category -> parent_id = $request ->parent_id;

        if(($request->image)>0){

          if(File::exists('images/categories/'. $category -> image))
          {
            File::delete('images/categories/'. $category -> image);
          }



            $image = $request->file('image');
            $img = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('images/categories/' .$img);
            Image::make($image)->save($location);
            $category -> image = $img;


            
        }
      $category ->save();

      session()->flush('success', 'New Category has been Updated');
      return redirect()->route('admin.categories');
      
   }

   
    public function delete($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){

        if($category -> parent_id == NULL){

            $sub_category = Category::orderBy('name', 'desc')-> where('parent_id', $category->id)->get();
            foreach($sub_category as $sub){

               if(File::exists('images/categories/'. $category -> image))
          {
            File::delete('images/categories/'. $category -> image);
          }

          $sub -> delete();

            }


        }


          if(File::exists('images/categories/'. $category -> image))
          {
            File::delete('images/categories/'. $category -> image);
          }

            $category -> delete();


         
        }

        session()->flash('success', 'category has been deleted !');

        return back();
    }
   
}

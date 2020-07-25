<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;


class BrandsController extends Controller
{
     public function __construct(Type $var = null)
    {
        $this ->middleware('auth:admin');
    }
   public function index()
   {
     $brands = Brand::orderBy('id', 'desc') -> get();
     return view('backend.pages.brands.index', compact('brands') );
   }

   public function create(){
        return view('backend.pages.brands.create');

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

      $brand = new Brand();
      $brand -> name = $request ->name;
      $brand -> description = $request ->description;

        if(($request->image)>0){


            $image = $request->file('image');
            $img = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('images/brands/' .$img);
            Image::make($image)->save($location);
            $brand -> image = $img;

        }
      $brand ->save();

      session()->flush('success', 'New Brand has been added');
      return redirect()->route('admin.brands');


   }

    public function edit($id){


        $brand = Brand::find($id);

        if(!is_null($brand)){
        return view('backend.pages.brands.edit' , compact('brand'));

        }
        else{
          return redirect()->route('admin.brands');
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

      $brand = Brand::find($id);
      $brand -> name = $request ->name;
      $brand -> description = $request ->description;
        if(($request->image)>0){

          if(File::exists('images/brands/'. $brand -> image))
          {
            File::delete('images/brands/'. $brand -> image);
          }



            $image = $request->file('image');
            $img = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('images/brands/' .$img);
            Image::make($image)->save($location);
            $brand -> image = $img;



        }
      $brand ->save();

      session()->flush('success', 'New Brand has been Updated');
      return redirect()->route('admin.brands');

   }


    public function delete($id)
    {
        $brand = Brand::find($id);
        if(!is_null($brand)){


          if(File::exists('images/brands/'. $brand -> image))
          {
            File::delete('images/brands/'. $brand -> image);
          }

            $brand -> delete();



        }

        session()->flash('success', 'brand has been deleted !');

        return back();
    }

}

<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\ProductImage;
use App\Models\Product;




class PagesController extends Controller
{
     public function index(){
         return view('backend.pages.index');
     }


}

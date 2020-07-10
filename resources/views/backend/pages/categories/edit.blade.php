@extends('backend.layouts.master')

@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Category
      </div>

      <div class="card-body">
        <form action="{{route('admin.category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
        {{ @csrf_field() }}

        @include('backend.partials.messages')

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$category->description}}</textarea>
          </div>

          {{-- <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">
          </div> --}}

           <div class="form-group">
              <label for="exampleInputPassword1">Parent Category (optional)</label>
              <select class="form-control" name="parent_id">
                <option value="">Please select a Primary category</option>
                @foreach ($main_categories as $cat)
                  <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
              </select>

            </div>

          <div class="form-group">
            <label for="Product_image">Category Iamge</label>
            <div class="row">
              <div class="col-md-4">
                <img src="{{ asset('images/categories/'.$category->image) }}" width="200px">
                <input type="file" class="form-control" name="image" >

              </div>
   
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
      </div>

    </div>

  </div>

</div>
@endsection
<!-- main-panel ends -->

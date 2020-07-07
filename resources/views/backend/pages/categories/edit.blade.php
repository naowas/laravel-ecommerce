@extends('backend.layouts.master')

@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Product
      </div>

      <div class="card-body">
        <form action="{{route('admin.product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        {{ @csrf_field() }}

        @include('backend.partials.messages')

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$product->title}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
          </div>

          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">
          </div>

          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
          </div>

          <div class="form-group">
            <label for="Product_image">Product Iamge</label>
            <div class="row">
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" >

              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" >

              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" >

              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" >

              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" >

              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" >

              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
      </div>

    </div>

  </div>

</div>
@endsection
<!-- main-panel ends -->

@extends('admin.layouts.master')

@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Product
      </div>

      <div class="card-body">
        <form action="{{route('admin.product.store')}}" method="POST">
        {{ @csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="Quantity">
          </div>
          
          <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
      </div>

    </div>

  </div>

</div>    
@endsection
<!-- main-panel ends -->
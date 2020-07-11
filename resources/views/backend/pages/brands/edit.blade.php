@extends('backend.layouts.master')

@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit brand
      </div>

      <div class="card-body">
        <form action="{{route('admin.brand.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
        {{ @csrf_field() }}

        @include('backend.partials.messages')

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{$brand->name}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$brand->description}}</textarea>
          </div>

          <div class="form-group">
            <label for="Brand_image">Brand Iamge</label>
            <div class="row">
              <div class="col-md-4">
                <img src="{{ asset('images/brands/'.$brand->image) }}" width="200px">
                <input type="file" class="form-control" name="image" >

              </div>
   
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update brand</button>
        </form>
      </div>

    </div>

  </div>

</div>
@endsection
<!-- main-panel ends -->

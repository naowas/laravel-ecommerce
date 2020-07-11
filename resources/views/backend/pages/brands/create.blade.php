@extends('backend.layouts.master')

@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add New Brand
      </div>

      <div class="card-body">
        <form action="{{route('admin.brand.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('backend.partials.messages')

          <div class="form-group">
            <label for="name">Brand Name</label>
            <input type="text" class="form-control" name="name" placeholder="Brand Name">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>


           <div class="form-group">
              <label for="image">Brand Image (optional)</label>
              <input type="file" class="form-control" name="image" id="image" >
            </div>

          <button type="submit" class="btn btn-primary">Add Brand</button>
        </form>
      </div>

    </div>

  </div>

</div>
@endsection
<!-- main-panel ends -->

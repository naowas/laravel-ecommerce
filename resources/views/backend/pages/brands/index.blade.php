@extends('backend.layouts.master')

@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Manage brands
      </div>

      <div class="card-body">
        @include('backend.partials.messages')

        <table class="table table-hover table-striped" id="dataTable">
            <thead>
                <tr>
              <th>#</th>
              <th>Brand Name</th>
              <th>Description</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
            </thead>

           @foreach ($brands as $brand)
            <tr>
              <td>#</td>
              <td>{{$brand->name}}</td>
              <td>{{$brand->description}}</td>
              <td>
                <img src="{!! asset('images/brands/'.$brand->image) !!}" width="100">
              </td>
              <td>
                <a href="{{route('admin.brand.edit',$brand->id)}}" class="btn btn-success">Edit</a>
                <a href="#deletemodal{{$brand->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                <!-- Delete Modal -->
              <div class="modal fade" id="deletemodal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this record ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <form action="{{ route('admin.brand.delete', $brand->id) }}" method="post">
                       @csrf

                        <button type="submit" class="btn btn-danger">Premananet Delete</button>

                      </form>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              </td>

            </tr>

           @endforeach
          </table>
      </div>

    </div>

  </div>

</div>
@endsection
<!-- main-panel ends -->

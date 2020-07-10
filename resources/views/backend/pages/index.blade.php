@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card card-body">
      <h3>Welcome to admin panel</h3>
    </div>
       
    <br>
    
    <a name="" id="" class="btn btn-primary" href="{{route('index')}}" role="button"> Visit main page</a>
   
  </div>
  <!-- content-wrapper ends -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="http://www.naowas.live/" target="_blank">Naowas Morshed</a>. All rights reserved.</span>
      {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i> --}}
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
@endsection
<!-- main-panel ends -->

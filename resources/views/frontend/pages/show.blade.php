@extends('frontend.layouts.master')
@section('content')
  {{-- Start Sidebar and content --}}

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-3">



    </div>

    <div class="col-md-9">

      <div class="widget">
        <h3>{{ $product-> title}}</h3>


      </div>

    </div>
  </div>
</div>

{{-- END Sidebar and content --}}
@endsection

@extends('frontend.layouts.master')
@section('content')
  {{-- Start Sidebar and content --}}

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-3">

            @include('frontend.partials.product-sidebar')

    </div>

    <div class="col-md-9">

      <div class="widget">
        <h3>Products</h3>

  @include('frontend.pages.product.partials.show_all_products')

      </div>
        <div class="widget">

      </div>
    </div>
  </div>
</div>

@endsection

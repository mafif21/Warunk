@extends('layouts.main')

@section('content')
<div class="position-relative">

  <img src="{{ asset('img/image-1.jpg') }}" alt="hero-img" class="img-fluid rounded-3 hero">

  <div class="button-hero">
    <div class="text-hero">
      <h1 class="text-light fw-semibold">Feel the taste of <span class="text-warning fst-italic">Indonesian</span> food</h1>
    </div>
    <div class="d-flex gap-3 mt-4">
      <button class="px-4 py-2 btn btn-danger rounded-pill fw-semibold">View Menu</button>
      <button class="px-4 py-2 btn btn-light rounded-pill fw-semibold">Online Order</button>
    </div>
  </div>
  
</div>
@endsection
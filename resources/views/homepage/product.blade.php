@extends('layouts.template')
@section('content')
<div class="container">
  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Produk</h2>
    </div>
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('product/satu') }}">
          <img src="{{asset('images/1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('product/satu') }}" class="text-decoration-none">
            <p class="card-text">Produk Pertama</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('product/dua') }}">
          <img src="{{asset('images/1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('product/dua') }}" class="text-decoration-none">
            <p class="card-text">Produk Kedua</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('product/tiga') }}">
          <img src="{{asset('images/1.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('product/tiga') }}" class="text-decoration-none">
            <p class="card-text">Produk Ketiga</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end kategori produk -->
</div>
@endsection
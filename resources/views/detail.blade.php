@extends('master')
@section('content')
    <div class="container px-4 px-lg-5 justify-content-center">
        <div class="row mb-5 gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{ $product['name'] }}</h2>
                <h3>Price : {{ $product['price'] }}</h3>
                <h4>Details: {{ $product['description'] }}</h4>
                <h4>category: {{ $product['category'] }}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{ $product['id'] }}>
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection

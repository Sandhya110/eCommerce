@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h3>{{ $product['name'] }}</h3>
                <h4>Price: {{ $product['price'] }}</h4>
                <h5>Details: {{ $product['description'] }}</h5>
                <h4>Category: {{ $product['category'] }}</h4>
                <br><br>
                <button class="btn btn-primary">Add to Cart</button>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>

    </div>
@endsection

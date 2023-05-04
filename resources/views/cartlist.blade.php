@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
                @foreach ($products as $item)
                    <div class="row searched-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">

                                <div class="">
                                    <h4>{{ $item->name }}</h4>
                                    <h5>{{ $item->description }}</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove to Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

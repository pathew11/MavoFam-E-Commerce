@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>Produse</h2>
        <div class="row">
            @foreach($allProducts as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('default_img.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body" >
                            <h4 class="cart-title">{{$product->name}}</h4>
                            <p class="card-text">{{$product->description}}</p>
                            <h3>{{$product->price}} Lei</h3>
                        </div>
                        <div class="card-body" style="display: flex; justify-content: center">
                            <a href="{{route('cart.add', $product->id)}}" class="card-link">Adauga in cos</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

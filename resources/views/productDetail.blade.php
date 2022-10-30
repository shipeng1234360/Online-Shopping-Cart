@extends('layout')
@section('content')

<div class="row" style="margin:auto;">
    <div class="col-2"></div>
    <div class="col-8">
        <br><br>
        <div class="card-body">
            <form action="{{route('add.to.cart')}}" method="POST">
            @CSRF
            @foreach($products as $product)
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        {{ $product->name }}
                    </h5>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <img src="{{asset('images/')}}/{{ $product->image}}" alt="" width="100%" class="img-fluid">
                </div>
                <div class="col-9">
                    <br><br>
                    <div class="card-text">{{ $product->description }}</div>
                    <div class="card-handing">Quantity <input type="number" min="1" name="quantity"> </div>
                    <div class="card-handing">Available: {{ $product->quantity }}</div>
                    <div class="card-heading">Price: {{ $product->price }}</div>
                    <button type="submit" class="btn btn-danger btn-xs">Add to Cart</button>
                </div>
            </div>
            @endforeach
            </form>
            
        </div>

        <br><br>
    </div>
    <div class="col-2"></div>
</div>

@endsection
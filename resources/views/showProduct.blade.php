@extends('layout')
@section('content')

<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Image</td>
                    <td>Category</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <!-- <td>{{ $product->image }}</td> -->
                    <td><img src="{{asset('images/')}}/{{ $product->image}}" alt="" width="100" class="img-fluid"></td>
                    <td>{{ $product->CategoryID }}</td>
                    <td><a href="{{route('editProduct',['id'=>$product->id])}}" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                        <a href="{{route('deleteProduct',['id'=>$product->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('are you sure to delete?')">Delete</a>
                    </td>
                    <!-- Must be primary key, in this case, 'id' -->
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-3"></div>
</div>

@endsection
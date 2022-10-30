@extends('layout')
@section('content')

<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <h3>Edit New Product</h3>
        <!--{{ route('addCategory') }}-->
        <form action="{{route('updateProduct')}}" method="POST" enctype="multipart/form-data"> <!--button type: submit-->
            <!--enctype="multipart/form-data" need when Upload image and file-->

            @csrf
            @foreach($products as $product)
            <div class="form-group">
                <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100" class="img-fluid">
                <br>

                <label for="productName">Edit New Product</label>
                <input type="hidden" name="id" value="{{$product->id}}">
                <input class="form-control" type="text" id="productName" name="productName" value="{{$product->name}}" required>
    
            </div>

            <div class="form-group">
                <label for="productDescription">Description</label>
                <input class="form-control" type="text" id="productDescription" name="productDescription" value="{{$product->description}}" required>
                
            </div>

            <div class="form-group">
                <label for="productPrice">Price</label>
                <input class="form-control" type="number" id="productPrice" name="productPrice" min="0" value="{{$product->price}}" required>
                
            </div>

            <div class="form-group">
                <label for="productQuantity">Quantity</label>
                <input class="form-control" type="number" id="productQuantity" name="productQuantity" min="0" value="{{$product->quantity}}" required>
                
            </div>

            <div class="form-group">
                <label for="productImage">Image</label>
                <input class="form-control" type="file" id="productImage" name="productImage">
                
            </div>

            <div class="form-group">
                <label for="categoryID">Category</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">
                            @if($product->CategoryID == $category->id)
                                selected
                            @endif

                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            @endforeach
        </form>

        
        <br><br>
    </div>
    <div class="col-3"></div>
</div>

@endsection
@extends('layout')
@section('content')

<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <h3>Add New Product</h3>
        <!--{{ route('addCategory') }}-->
        <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data"> <!--button type: submit-->
            <!--enctype="multipart/form-data" need when Upload image and file-->

            @csrf
            <div class="form-group">
                <label for="productName">Add New Product</label>
                <input class="form-control" type="text" id="productName" name="productName" required>
    
            </div>

            <div class="form-group">
                <label for="productDescription">Description</label>
                <input class="form-control" type="text" id="productDescription" name="productDescription" required>
                
            </div>

            <div class="form-group">
                <label for="productPrice">Price</label>
                <input class="form-control" type="number" id="productPrice" name="productPrice" min="0" required>
                
            </div>

            <div class="form-group">
                <label for="productQuantity">Quantity</label>
                <input class="form-control" type="number" id="productQuantity" name="productQuantity" min="0" required>
                
            </div>

            <div class="form-group">
                <label for="productImage">Image</label>
                <input class="form-control" type="file" id="productImage" name="productImage">
                
            </div>

            <div class="form-group">
                <label for="categoryID">Category</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add New</button>
        </form>

        
        <br><br>
    </div>
    <div class="col-3"></div>
</div>

@endsection
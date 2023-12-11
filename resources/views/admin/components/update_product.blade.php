@extends('admin.index')
@section('admin')
    <div class="all-product-update">
        <div class="product-update container">
            <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="product-name">
                    <input type="text" name="product_name" placeholder="Product Name" class="form-control"
                        value="{{ $product->product_name }}">
                </div>

                <div class="product-type">
                    <input type="text" name="product_type" placeholder="Product Type" class="form-control"
                        value="{{ $product->product_type }}">
                </div>

                <div class="product-description">
                    <input type="text" name="product_description" placeholder="Product Description" class="form-control"
                        value="{{ $product->product_description }}">
                </div>

                <div class="product-quantity">
                    <input type="text" name="product_quantity" placeholder="Product Quantity" class="form-control"
                        value="{{ $product->product_quantity }}">
                </div>

                <div class="product-price">
                    <input type="text" name="product_price" placeholder="Product Price" class="form-control"
                        value="{{ $product->product_price }}">
                </div>

                <div class="product_image">
                    <input type="file" name="product-image" placeholder="Product Image" class="form-control"
                        value="{{ $product->product_image }}">
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-info">Next</button>
                </div>
            </form>
        </div>
    </div>
@endsection

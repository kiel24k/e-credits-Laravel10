@extends('admin.index')
@section('admin')
    <div class="product-section container">

        <div class="add-product">
            <h1 class="mb-4 text-center">Add Product</h1>
            <form action="{{ route('admin.add.products') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="product-name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                <div class="product-type">
                    @error('type')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="type" placeholder="Type" class="form-control">
                </div>

                <div class="product-price">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="price" placeholder="Price" class="form-control">
                </div>
                <div class="product-description">
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <small>optional:</small>
                    <input type="text" name="description" placeholder="description" class="form-control">
                </div>
                <div class="product-image">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="category">
                        @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                        <label for="">Category</label>
                        <select name="category" id="">
                            <option value="New">New</option>
                            <option value="Popular">Popular</option>
                        </select>
                    </div>
                    <input type="file" name="image">
                </div>
                <div class="submit text-end">
                    <button type="submit" class="btn btn-info">Okay</button>
                </div>
            </form>
        </div>
    </div>
@endsection

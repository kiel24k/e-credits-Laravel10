@extends('admin.index')
@section('admin')
    <div class="container mt-5">
        <table class="table table-bordered table-dark table-responsive">
            <thead>
                <tr class="text-center">
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Type</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($product as $products)
                    <tr>
                        <td><img src="/images/{{ $products->product_image }}" alt="" height="50px" width="100px">
                        </td>
                        <td>{{ $products->product_name }}</td>
                        <td>{{ $products->product_type }}</td>
                        <td>{{ $products->product_description }}</td>
                        <td>{{ $products->product_price }}</td>
                        <td class="text-center"><button class="btn btn-success"><a
                                    href="{{ route('admin.update.view', $products->id) }}" class="nav-link">Edit</a></button>
                            <button class="btn btn-danger"><a href="{{ route('admin.delete', $products->id) }}"
                                    class="nav-link">Delete</a></button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="button text-end">
            <a href="{{ route('admin.add.product') }}" class=""><button class="btn btn-info text-white">Add
                    Product</button></a>
        </div>
    </div>
@endsection

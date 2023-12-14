@extends('user.index')
@section('items')


<p class="text-white">{{$purchase->product_name}}</p>
<div class="purchase">
    <div class="all-purchase container bg-info">
        <form action="">
            <div class="product-image">
                <img src="/images/{{$purchase->product_image}}" alt="">
            </div>
<div class="product-name">
    <input type="text" name="product_name" readonly value="{{$purchase->product_name}}">
</div>
<p class="success">
    {{$purchase->product_description}}
</p>
<div class="product-type">
    <input type="text" name="product_type" readonly value="{{$purchase->product_type}}">
</div>
<div class="product-price">
    <input type="text" name="product_price"  value="{{$purchase->product_price}}">
</div>
        </form>
    </div>
</div>

@endsection

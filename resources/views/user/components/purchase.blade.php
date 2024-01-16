@extends('user.index')
@section('items')
    <main>
        <section class="purchase-section-one ">
            <div class="purchase-content-description">
                <div class="purchase-description-main">
                   <h5> {{$purchase->product_description}}</h5>
                </div>
                <div class="purchase-social-media">

                </div>
            </div>
            <div class="purchase-content-form bg-info">
                <form action="{{ route('purchase.product') }}" method="post">
                    @csrf
                    <div class="purchase-input">

                        <input type="hidden" name="owner" value="{{ Auth('client')->user()->email }}">
                        <div class="purchase-image">
                            <img src="/images/{{ $purchase->product_image }}" alt="">
                        </div>
                        <div class="purchase-name">
                            <p class="purchase-info">
                                Name:
                            </p>
                            <input type="text" name="product_name" value="{{ $purchase->product_name }}" readonly>
                        </div>
                        <div class="purchase-type">
                            <p class="purchase-info">
                                Type:
                            </p>
                            <input type="text" name="product_type" value="{{ $purchase->product_type }}" readonly>
                        </div>
                        <div class="purchase-price">
                            <p class="purchase-info">
                                Price:
                            </p>
                            <b>₱</b>
                            <input type="text" name="product_price" value="{{ $purchase->product_price }}" readonly>
                        </div>
                        <div class="purchase-quantity">
                            <p class="purchase-info">
                                Quantity:
                            </p>

                            @error('product_quantity')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror

                            <input type="number" name="product_quantity" placeholder="quantity" value="">
                        </div>
                        <div class="purchase-submit">
                            <button type="submit">
                                Checkout
                            </button>
                        </div>

                    </div>
                </form>
            </div>

        </section>

    </main>
@endsection

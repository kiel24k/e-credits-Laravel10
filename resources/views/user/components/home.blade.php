@extends('user.index')
@section('items')
    {{-- grid --}}
    <div class="home">
        <div class="home-section-one">
            <div class="home-content-one">
                <h1>MObile recharge made easy</h1>
                <h3>600+ mobile carriers in 160+ countries</h3>
                <p>
                    <img src="{{ asset('icon/checked.png') }}" alt="" width="35px">
                    <b>Fast & secure top up service</b>
                </p>
                <p>
                    <img src="{{ asset('icon/checked.png') }}" alt="" width="35px">
                    <b>600+ Mobile Carriers in 160+ Countries</b>
                </p>
                <p>
                    <img src="{{ asset('icon/checked.png') }}" alt="" width="35px">
                    <b>Refill minutes & data in 3 easy steps</b>
                </p>
                <p>
                    <img src="{{ asset('icon/checked.png') }}" alt="" width="35px">
                    <b>Great offers for instant top ups</b>
                </p>
                <p>
                    <img src="{{ asset('icon/checked.png') }}" alt="" width="35px">
                    <b>Stay in touch with family & friends</b>
                </p>
                <a href="{{ route('user.section') }}">
                    <button>top up now</button></a>
            </div>
        </div>
        <div class="home-section-two">
            <div class="home-section-two-title">
                <h1>Top up in simple steps!</h1>
            </div>
            <div class="home-content-two">

                <div class="home-item">
                    <img src="{{ asset('icon/basket.png') }}" alt="" width="100px"
                        class="img-fluid img-responsive">
                    <b>Product</b>
                    <p>select product do you want</p>
                </div>
                <div class="home-item">
                    <img src="{{ asset('icon/credit-card.png') }}" alt="" width="100px"
                        class="img-fluid img-responsive">
                    <b>Payment Details</b>
                    <p>choose a payment method available</p>
                </div>
                <div class="home-item">
                    <img src="{{ asset('icon/receive-mail.png') }}" alt="" width="100px"
                        class="img-fluid img-responsive">
                    <b>Received</b>
                    <p>Enjoy the game with more fun</p>
                </div>
            </div>
        </div>
        <div class="home-section-three">
            <div class="home-content-three">
                <div class="home-content-three-title">
                    <h1>Latest partners payment method</h1>
                </div>
                <div class="home-content-three-item">
                    <img src="{{ asset('images/gcash.png') }}" alt="" width="150px"
                        class="img-fluid img-responsive">
                    <img src="{{ asset('images/paymaya.jpg') }}" alt="" width="150px"
                        class="img-fluid img-responsive">
                    <img src="{{ asset('images/coinsph.jpg') }}" alt="" width="150px"
                        class="img-fluid img-responsive">
                </div>

            </div>

        </div>



    </div>
@endsection

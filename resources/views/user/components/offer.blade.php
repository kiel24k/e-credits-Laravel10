@extends('user.index')
@section('items')
    <div class="offer">
        <main>
            <div class="offer-section-one">
                <div class="offer-form">
                    {{-- <form action="">
                        <div class="offer-search">
                            <input type="text" name="search" placeholder="Search">
                            <span><button type="submit" class="">Search</button></span>
                        </div>
                    </form> --}}
                </div>


                <div class="recently-added">
                    <div class="offer-category-new-product">
                        <b class="">Popular</b>
                    </div>
                    <div class="recently-added-section">
                        @foreach ($populars as $popular)
                            <div class="item-one">
                                <img src="/images/{{ $popular->product_image }}" width="170px" height="180px" alt="">
                                <div class="item-name">
                                    <b class="text-white">{{$popular->product_name}}</b>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
            <div class="offer-section-two">
                <div class="new-items-title">
                    <b class="text-white">New</b>
                </div>
                <div class="new-items-section">
                    @foreach ($news as $new )
                    <div class="new-items-content">
                        <div class="new-item-one">
                            <img src="/images/{{ $new->product_image }}" width="170px" height="180px" alt="">
                            <div class="item-name">
                                <b class="text-white">{{$new->product_name}}</b>
                            </div>
                        </div>
                    </div>

                    @endforeach



                </div>


            </div>
        </main>
    </div>
@endsection

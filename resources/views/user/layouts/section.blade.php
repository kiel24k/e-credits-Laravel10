@extends('user.index')
@section('items')
    <section>
        <div class="container pt-5">
            <div class="row">
                @foreach ($item as $items)
                    <div class="items col-2 p-2 m-2">
                        <a href="{{route('user.purchase',$items->id)}}">
                            <img src="/images/{{$items->product_image}}" alt class="mx-auto d-block mb-3" width="170" height="170px">
                            <p class="text-start">{{ $items->product_name }}</p>
                            <p class="text-start">{{ $items->product_type }}</p>
                            <p class="text-start">₱{{$items->product_price}}</p>
                        </a>
                    </div>
                @endforeach
    </section>
@endsection

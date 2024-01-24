@extends('user.index')
@section('items')
    <section class="forgot">
        <h1>Forgot password</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci ducimus, aperiam, maxime atque quasi,
            reprehenderit ullam alias officiis error aliquam eius veniam ipsam similique asperiores quidem tempore dolor
            optio?</p>
        <form action="{{ route('forgot.submit') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">

                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach

                </div>
            @endif
            <input type="text" name="email" class="form-control" placeholder="Your Email" value="">
            <input type="password" name="password" class="form-control" placeholder="New password">
            <div class="forgot-button">
                <button type="submit">Reset my password</button>
            </div>
        </form>
    </section>
@endsection

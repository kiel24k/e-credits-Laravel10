@extends('user.index')
@section('items')
    <div class="login">
        <div class="container">
            <div class="row mx-auto mt-5 justify-content-center">
                <div class="section-one col-5 p-5 mt-5 ">
                    <form action="{{ route('user.signup.account') }}" method="post">
                        @csrf
                        <small>GamePass</small>
                        <h5 class="text-center">Signup Account</h5>
                        <div class="username mt-4">
                            @error('username')
                                <p>{{ $message }}</p>
                            @enderror
                            <input type="text" name="username" placeholder="Username" class="form-control">
                            <div class="email">
                                @error('email')
                                <p>{{$message}}</p>
                                @enderror
                                <input type="text" name="email" placeholder="Email" class="form-control">
                                <div class="password">
                                    @error('password')
                                    <p>{{$message}}</p>
                                    @enderror
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                    <div class="forgot-password text-end">
                                        <a href="">Forgot Password?</a>
                                    </div>
                                    <div class="submit text-center">
                                        <button type="submit" class="btn"><b class="text-white">Next</b></button>
                                        <div class="info">
                                            <a href="{{ route('user.login') }}">Already account ?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="section-two col-3 mt-5">Design</div>
            </div>

        </div>
    </div>
@endsection

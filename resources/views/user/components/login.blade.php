@extends('user.index')
@section('items')
    <div class="login">
        <div class="container">
            <div class="row mx-auto mt-5 justify-content-center">
                <div class="section-one col-5 p-5 mt-5 ">
                    @if(session('success'))
                    <p class="alert alert-success">{{session('success')}}</p>
                    @endif

                    <form action="{{ route('user.login.account') }}" method="post">
                        @csrf
                        <small>GamePass</small>
                        <h5 class="text-center">Login Account</h5>


                        @error('user_email')
                            <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                        <div class="username mt-4">
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                            <input type="text" name="email" placeholder="Email" class="form-control">
                            <div class="password">
                                @error('password')
                                    <p>{{ $message }}</p>
                                @enderror
                                <input type="password" name="password" placeholder="Password" class="form-control">
                                <div class="forgot-password text-end">
                                    <a href="{{ route('forgot.password') }}">Forgot Password?</a>
                                </div>
                                <div class="submit text-center">
                                    <button type="submit" class="btn text-white"><b>Login</b></button>
                                    <div class="info">
                                        <a href="{{ route('user.signup') }}">Dont have account yet?</a>
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

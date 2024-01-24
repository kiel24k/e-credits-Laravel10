@extends('user.index')
@section('items')
    <section class="password-reset">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <form action="{{route('resets')}}" method="POST">
            @csrf
            @error('password')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            <input type="text" name="password" class="form-control" placeholder="new password">
            <button type="submit">Reset Now!</button>
        </form>

    </section>
@endsection

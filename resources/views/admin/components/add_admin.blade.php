@extends('admin.index')
@section('admin')
    <div class="add-admin container">
        <div class="form">
            <form action="{{ route('admin.add') }}" method="post">
                @csrf
                <div class="email">
                    @error('admin_email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="admin_email" placeholder="Admin Email" class="form-control">
                </div>
                <div class="password">
                    @error('admin_password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="admin_password" placeholder="Admin Password" class="form-control">
                </div>
                <div class="submit text-center">
                    <button type="submit" class="btn  btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

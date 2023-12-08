@extends('user.profile_index')
@section('profile')

    <body id="profile">
        <div class="profile-cover container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="picture text-center">
                        <img src="{{ asset('assets/hsr_tile.jpg') }}" alt="" class="img-fluid mx-auto img-rounded">
                    </div>
                </div>
                <div class="col">
                    @auth('client')
                        <div class="name">
                            <b>Name:{{ Auth('client')->user()->username }}</b>
                        </div>
                        <div class="Email">
                            <b>Email: {{ Auth('client')->user()->email }}</b>
                        </div>
                        <div class="Number">
                            <button class="btn btn-info"><a href="" class="nav-link">Update Profile</a></button>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="search col-4">
                   <input type="text" name="search" placeholder="Search" class="form-control">
                </div>
                <div class="search-button col-1 ">
                    <button class="btn btn-outline-info">Search</button>
                </div>
            </div>
            <div class="container mt-3 ">
                <table class="table table-danger table-bordered table-responsive">
                    <thead class="text-center">
                        <tr>
                            <th>Picture</th>
                            <th>Order</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Received</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>img</td>
                            <td>mdksiadfhsufdkjsfgsdbgffsdg</td>
                            <td>x100 Emblem</td>
                            <td>Date receive history</td>
                            <td class="text-center">
                                <p class="text-success">Done</p>
                            </td>
                            <td>Tuesday 10:30pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection

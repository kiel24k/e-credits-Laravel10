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
                            <button class="btn btn-info"><a href="" class="nav-link">Update Profile</a>
                            </button>
                            <button class="btn btn-success text-white">
                                <a href="{{route('user.section')}}" class="nav-link">Home</a>
                            </button>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="search-button col-1 text-center">
                    <h1>HISTORY</h1>
                </div>
            </div>
            <div class="container mt-3 ">
                <table class="table table-danger table-bordered table-responsive">
                    <thead class="text-center">
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Updates</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infos as $info)
                            <tr>
                                <td>{{ $info->product_name }}</td>
                                <td>{{ $info->product_type }}</td>
                                <td>{{ $info->product_quantity }}</td>
                                <td>${{ $info->product_price }}</td>
                                <td class="text-center">
                                    <a href="{{route('delete.history', $info->id)}}">
                                        <button class="btn btn-success">
                                            Received
                                            </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $infos->links() }}
            </div>
        </div>

    </body>
@endsection

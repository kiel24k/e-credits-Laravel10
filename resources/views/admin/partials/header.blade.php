<div class="navbar navbar-expand">
    <div class="container justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a href="{{route('admin.add.view')}}" class="nav-link m-4">Add Admin</a>
            </li>
            <li class="nav-item ">
                <a href="{{route('admin.product')}}" class="nav-link m-4">Product</a>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link m-4">User Status</a>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link m-4">Admin Info</a>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link m-4">@auth('client')
                    <b>{{Auth('client')->user()->email}}</b>
                @endauth</a>
            </li>
            <li class="nav-item ">
                <a href="{{route('admin.logout')}}" class="nav-link m-4">Logout</a>
            </li>
        </ul>
    </div>
</div>

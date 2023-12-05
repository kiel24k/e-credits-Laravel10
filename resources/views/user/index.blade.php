<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href />
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user.css') }}" />
    <title>Gamepass ITEC 116</title>
</head>

<body>
    @include('user.layouts.header')



@yield('items')

    @include('user.layouts.footer')
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src='{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}'></script>
</body>

</html>

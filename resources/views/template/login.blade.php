<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.header')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        {{-- @include('template.navbar') --}}
        @yield('content')
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    @include('auth.layout.log.head')
<body>
    @include('auth.layout.log.header')

    <div class="container">
        @yield('content')
    </div>
    @include('auth.layout.log.footer')
</body>
</html>

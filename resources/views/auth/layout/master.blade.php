<!DOCTYPE html>
<html lang="en">
    @include('Login.layout.log.head')
<body>
    @include('Login.layout.log.header')

    <div class="container">
        @yield('content')
    </div>
    @include('Login.layout.log.footer')
</body>
</html>

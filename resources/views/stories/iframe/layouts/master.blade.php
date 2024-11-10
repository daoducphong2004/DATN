<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    @include('stories.iframe.layouts.head')
</head>
@yield('content')
@include('stories.iframe.layouts.footer')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NoIndex, NoFollow">
    <title>
        @section('title')
            Bảng điều khiển
        @endsection
    </title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <link href="{{ asset('css/action.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <div class="container">
        @include('admin.layouts.header')

        @yield('content')

        @include('admin.layouts.footer')
    </div>

    <script src="{{ asset('livewire.js') }}" data-csrf="W9O2N8fsWqtf5htSKnG8NQgXXtgmI5MppKat5xvY" data-update-uri="/livewire/update" data-navigate-once="true" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <script src="{{ asset('rocket-loader.min.js') }}" data-cf-settings="4fa4d48513266ca2bda21aed-|49" defer></script>

    @stack('scripts')
</body>

</html>

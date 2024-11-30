<!DOCTYPE html>
<html lang="en">
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
    }

    footer {
        background: #333;
        color: #fff;
        /* text-align: center; */
        /* padding: 1em 0; */
    }

    .sect-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sect-title {
        flex-grow: 1;
        margin-right: 10px;
    }

    .buy-all-button button {
        background-color: #f56565;
        color: white;
        font-weight: bold;
        padding: 0.5rem 1rem;
        border-radius: 1rem;
        border: none;
    }
</style>
<title>@yield('title')</title>

@include('home.layout.home.head')

<body>
    <main>
        @include('home.layout.home.header')

        @yield('content')
    </main>
    <footer>
        @include('home.layout.home.footer')
    </footer>
</body>

</html>

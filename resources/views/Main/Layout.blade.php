<html>
<head>
    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">

    @yield('content')

</div>

<footer>
    @yield('script')
</footer>
</body>
</html>
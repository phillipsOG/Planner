<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="header">
        @section('header')
            @include('includes.header')
        @show
    </div>
    @yield('planner')
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    {{ HTML::style('/packages/cherryoff/nbblog/css/main.css') }}
    <title>
        @yield('title')
    </title>
</head>
<body>
    <h1>Блог</h1>
    @yield('content')
</body>
</html>
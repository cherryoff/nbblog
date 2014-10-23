<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lora&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    {{ HTML::style('/packages/cherryoff/nbblog/css/main.css') }}
    <title>
        @yield('title') | {{ Config::get('nbblog::blog_title') }}
    </title>
</head>
<body>
    <div class="content">
        <header>
            <h1>{{ Config::get('nbblog::blog_title') }}</h1>
            <small>{{ Config::get('nbblog::blog_description') }}</small>
        </header>
        <nav>
            <ul>
                <li><a href="/">Main page</a></li>
                <li><a href="{{ Config::get('nbblog::uri') }}">Blog</a></li>
            </ul>
        </nav>
        @yield('content')
    </div>
</body>
</html>
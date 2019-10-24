<html>
<head>
    <title>CafeMoka-@yield('title')</title>
</head>
<body>
    <header>
        <h1>This is header`</h1>
    </header>
    <nav>
        @section('nav');
        <h2>This is nav</h2>
        @show
    </nav>
    <main>
        @section('main');
        <h3>This is main</h3>
        @show
    </main>
    <aside>
    </aside>
    <footer>
    </footer>
</body>



</html>
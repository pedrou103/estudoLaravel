<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - laravel 1</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        rodapé.
    </footer>
</body>
</html>
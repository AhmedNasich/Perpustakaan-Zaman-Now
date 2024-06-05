<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
</head>
<body>
    <header>
        <h1>Library</h1>
        <nav>
            <a href="{{ route('books.index') }}">Home</a>
            <a href="{{ route('books.create') }}">Tambah Buku</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>

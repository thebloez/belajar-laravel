<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Tutorial Laravel</h2>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/tentang">TENTANG</a>
            |
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr>
    <br/>
    <br/>

    <h3>@yield('judul_halaman')</h3>

    @yield('konten')
    <hr>
    <br/>
    <br/>
    <footer>Ini footer</footer>
</body>
</html>
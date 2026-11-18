<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="navbar">
    <h2>Digital Library</h2>

    <div>
        <a href="/buku">Katalog</a>
        <a href="/buku">Detail Buku</a>
    </div>
</div>

<div class="container">

    <h1>Detail Buku</h1>

    {{-- Perulangan --}}
    @foreach ($buku as $item)

        <div class="buku">

            <h2>{{ $item->nama }}</h2>

            <p>
                <b>Kode Buku:</b>
                {{ $item->kode }}
            </p>

            <p>
                <b>Penerbit:</b>
                {{ $item->penerbit }}
            </p>

            <p>
                <b>Tahun Terbit:</b>
                {{ $item->tahun }}
            </p>

            <p>
                <b>Kategori:</b>
                {{ $item->kategori }}
            </p>

            <p>
                <b>Status:</b>
                {{ $item->status }}
            </p>

            
            <a href="/buku/edit/{{ $item->id }}">Edit Buku</a>

        </div>

    @endforeach

    <a class="tombol" href="/buku">Kembali ke Katalog</a>
</div>

</body>
</html>
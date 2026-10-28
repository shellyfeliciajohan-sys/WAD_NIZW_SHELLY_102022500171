<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Katalog Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="navbar">
    <h2>Digital Library</h2>

    <div>
        <a href="/buku">Katalog</a>
        <a href="/buku/detail">Detail Buku</a> 
    </div>
</div>

<div class="container">

    <h1>Katalog Buku</h1>

    <p>Temukan berbagai koleksi buku yang tersedia di perpustakaan.</p>

    <div class="form-buku">

        <h2>Tambah Buku</h2>

        
        <form action="/buku/store" method="POST">
            @csrf

            <label>Kode Buku</label>
            <input type="text" name="kode" placeholder="Contoh: BK005" required>

            <label>Nama Buku</label>
            <input type="text" name="nama" placeholder="Masukkan nama buku" required>

            <label>Penerbit</label>
            <input type="text" name="penerbit" placeholder="Masukkan penerbit" required>

            <label>Tahun Terbit</label>
            <input type="number" name="tahun" placeholder="Masukkan tahun" min="1" required>

            <label>Kategori</label>
            <input type="text" name="kategori" placeholder="Contoh: Teknologi" required>

            <label>Status</label>
            <select name="status">
                <option value="Tersedia">Tersedia</option>
                <option value="Dipinjam">Dipinjam</option>
            </select>

            <button type="submit">+ Tambah Buku</button>

        </form>

    </div>

    <table>

        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>

        
        @foreach ($buku as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->kode }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->penerbit }}</td>
            <td>{{ $item->tahun }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->status }}</td>

            <td>
                
                <a href="/buku/edit/{{ $item->id }}">Edit</a>

                {{-- Tombol Hapus --}}
                <form action="/buku/destroy/{{ $item->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')" style="background:none; color:red; border:none; cursor:pointer; padding:0;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    
<a class="tombol" href="/buku/detail">Lihat Detail Buku</a> 

</div>

</body>
</html>
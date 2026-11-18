<form action="/buku/update/{{ $buku->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Kode Buku</label>
    <input type="text" name="kode" value="{{ $buku->kode }}" required>

    <label>Nama Buku</label>
    <input type="text" name="nama" value="{{ $buku->nama }}" required>

    <label>Penerbit</label>
    <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required>

    <label>Tahun Terbit</label>
    <input type="number" name="tahun" value="{{ $buku->tahun }}" required>

    <label>Kategori</label>
    <input type="text" name="kategori" value="{{ $buku->kategori }}" required>

    <label>Status</label>
    <select name="status">
        <option value="Tersedia" {{ $buku->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
        <option value="Dipinjam" {{ $buku->status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
    </select>

    <button type="submit">Simpan Perubahan</button>
</form>
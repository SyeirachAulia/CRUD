
<h5>Form Input Biodata Mahasiswa</h5>
<hr>
<form action="modul/biodata/proses.php?action=insert" method="post">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" name="npm" /><br>
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" /><br>
    <label for="prodi">Prodi</label>
    <select name="prodi" class="form-control">
        <option value="Sistem Informasi (S1)">Sistem Informasi (S1)</option>
        <option value="Teknik Informatika (S1)">Teknik Informatika (S1)</option>
        <option value="Bisnis Digital (S1)">Bisnis Digital (S1)</option>
        <option value="Manajemen Informatika (S1)">Manajemen Informatika (D3)</option>
        <option value="Komputerisasi Akuntansi (D3)">Komputerisasi Akuntansi (D3)</option>
    </select>
    <br>
    <input type="submit" class="btn btn-primary" value="Simpan" />
 </form>
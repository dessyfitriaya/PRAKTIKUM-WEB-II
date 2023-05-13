<?php
    include_once("Koneksi.php");

    if(isset($_POST['input1'])) {
        mysqli_query($koneksi, "INSERT INTO member SET
        nama_member = '$_POST[nama]',
        nomor_member = '$_POST[nomor]',
        alamat = '$_POST[alamat]',
        tgl_mendaftar = '$_POST[daftar]',
        tgl_terakhir_bayar = '$_POST[bayar]'");

        echo "Data berhasil ditambahkan<br>";
        echo "<a href='HalamanUtama.php'>Kembali ke Halaman Utama</a><br>";
        echo "<a href='FormMember.php'>Kembali ke Form Member</a><br>";
        echo "<a href='Member.php'>Lihat daftar member</a>";
    } 
    elseif(isset($_POST['input2'])) {
        mysqli_query($koneksi, "INSERT INTO buku SET
        judul_buku = '$_POST[judul]',
        penulis = '$_POST[penulis]',
        penerbit = '$_POST[penerbit]',
        tahun_terbit = '$_POST[tahun_terbit]'");

        echo "Data berhasil ditambahkan<br>";
        echo "<a href='HalamanUtama.php'>Kembali ke Halaman Utama</a><br>";
        echo "<a href='FormBuku.php'>Kembali ke Form Buku</a><br>";
        echo "<a href='Buku.php'>Lihat daftar buku</a>";
    }
    elseif(isset($_POST['input3'])) {
        mysqli_query($koneksi, "INSERT INTO peminjaman SET
        tgl_pinjam = '$_POST[pinjam]',
        tgl_kembali = '$_POST[kembali]'");

        echo "Data berhasil ditambahkan<br>";
        echo "<a href='HalamanUtama.php'>Kembali ke Halaman Utama</a><br>";
        echo "<a href='FormPeminjaman.php'>Kembali ke Form Peminjaman</a><br>";
        echo "<a href='Peminjaman.php'>Lihat daftar peminjaman</a>";
    }
    else {
        echo "Tindakan gagal dilakukan<br>";
        echo "<a href='HalamanUtama.php'>Kembali ke Halaman Utama</a>";
    }
?>

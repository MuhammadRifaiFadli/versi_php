<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (tambah_kategori()) {
        echo "<script>
                alert('Berhasil Tambah Kategori');
                window.location = 'kategori.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal tambah kategori');
                window.location = 'kategori_tambah.php';
            </script>";
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Kategori</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" name="titleform">
                <input name="process" type="hidden" value="input">
                <div id="view" class="form-group">
                    <div class="view_label">Nama Kategori</div>
                    <div class="view_content"><input type="text" name="nama_kategori" class="form-control" style="width:100%;" autofocus required></div>
                </div>
                <div id="view" class="form-group">
                    <div class="view_label">Deskripsi</div>
                    <div class="view_content"><textarea name="deskripsi" class="form-control" style="width:100%;" required></textarea></div>
                </div>
                <input type="submit" name="submit" value="Simpan" class="btn btn-primary" style="margin:10px 0px 5px 0px;">
                <a href="kategori.php" class="btn btn-secondary" style="margin:10px 0px 5px 0px;">Kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include __DIR__ . '/../../inc/footer.php';
?>
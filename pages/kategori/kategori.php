<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
hapus_kategori();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori Inventaris</h6>
            <a href="kategori_tambah.php" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Kategori</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $tampil_kategori = tampil_kategori();
                        foreach ($tampil_kategori as $kategori): ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $kategori['nama_kategori']; ?></td>
                                <td><?php echo $kategori['deskripsi']; ?></td>
                                <td class="text-center">
                                    <a href="kategori_edit.php?id=<?php echo $kategori['id']; ?>" class="btn-dark mr-2" style="padding:5px 7px"><i class="fa fa-edit btn-dark"></i></a>
                                    <a href="kategori.php?id=<?php echo $kategori['id']; ?>" class="btn-dark mr-2" style="padding:5px 7px" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?');"><i class="fa fa-trash-alt btn-dark"></i> </i></a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include __DIR__ . '/../../inc/footer.php';
?>
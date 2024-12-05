<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
hapus_user();
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>

            <a href="user_tambah.php" class="btn btn-primary mb-4">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah User</span>
            </a>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Users DataTable
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>No HP</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $tampil_user = tampil_user();
                                foreach ($tampil_user as $user): ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
                                        <td><?php echo $user['username']; ?></td>
                                        <td><?php echo $user['phone']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php switch ($user['active']) {
                                                case 1:
                                                    $set_active = 'Aktif';
                                                    break;
                                                case 0:
                                                    $set_active = 'Tidak Aktif';
                                                    break;
                                            }
                                            echo $set_active;
                                            ?></td>
                                        <td class="text-center">
                                            <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="btn-dark mr-2" style="padding:5px 7px"><i class="fa fa-edit btn-dark"></i></a>
                                            <a href="user.php?id=<?php echo $user['id']; ?>" class="btn-dark mr-2" style="padding:5px 7px" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?');"><i class="fa fa-trash-alt btn-dark"></i></i></a>
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
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>
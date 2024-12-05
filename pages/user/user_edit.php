<?php 
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (update_user()) {
        echo "<script>
                alert('Berhasil edit user');
                window.location = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal edit user');
                window.location = 'user_edit.php';
            </script>";
    }
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Edit User
                </div>
                <div class="card-body">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo ambil_edit_user()['id']; ?>">
                        <div class="form-group row"> 
                            <label for="inputFirstName3" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input name="first_name" type="text" class="form-control" value="<?php echo ambil_edit_user()['first_name']; ?>" id="inputFirstFirstName3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName3" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input name="last_name" type="text" class="form-control" value="<?php echo ambil_edit_user()['last_name']; ?>" id="inputLastLastName3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" class="form-control" value="<?php echo ambil_edit_user()['username']; ?>" id="inputUsername3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input name="phone" type="number" class="form-control" value="<?php echo ambil_edit_user()['phone']; ?>" id="inputPhone3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" value="<?php echo ambil_edit_user()['email']; ?>" id="inputEmail3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" class="form-control" id="inputPassword3" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlSelect3" class="col-sm-2 col-form-label">Status User</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect3" name="active">
                                    <option selected disabled>-- Pilih Status User --</option>
                                    <option value="1" <?php echo ambil_edit_user()['active'] == '1' ? 'selected' : '' ?>>Aktif</option>
                                    <option value="0" <?php echo ambil_edit_user()['active'] == '0' ? 'selected' : '' ?>>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <a href="user.php" class="btn btn-secondary">Kembali</a>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php 
include __DIR__ . '/../../inc/footer.php'; 
?>
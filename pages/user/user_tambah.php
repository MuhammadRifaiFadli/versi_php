<?php 
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (tambah_user()) {
        echo "<script>
                alert('Berhasil tambah user');
                window.location = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal tambah user');
                window.location = 'user_tambah.php';
            </script>";
    }
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Form User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Form User
                </div>
                <div class="card-body">
                    <form method="POST">
                        <input type="hidden" name="ip_address">
                        <input type="hidden" name="active" value="1"> 
                        <div class="form-group row">
                            <label for="inputFirstName3" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input name="first_name" type="text" class="form-control" id="inputFirstFirstName3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName3" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input name="last_name" type="text" class="form-control" id="inputLastLastName3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" class="form-control" id="inputUsername3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input name="phone" type="number" class="form-control" id="inputPhone3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputEmail3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" class="form-control" id="inputPassword3" />
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
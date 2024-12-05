<?php 
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php'; 
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
                    <form>
                        <div class="form-group row">
                            <label for="inputName3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" />
                            </div>
                        </div>

                        <!-- input addons -->
                        <div class="form-group row">
                            <label for="inputAddons3" class="col-sm-2 col-form-label">Input Addons</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <!-- textarea -->
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea3" class="col-sm-2 col-form-label">Example
                                textarea</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea3"
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <!-- select -->
                        <div class="form-group row">
                            <label for="exampleFormControlSelect3" class="col-sm-2 col-form-label">Example
                                select</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect3">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
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
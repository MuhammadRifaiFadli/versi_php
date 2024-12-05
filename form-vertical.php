<?php include 'inc/header.php'; ?>
    <?php include 'inc/sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Form Vertical</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Form Vertical</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Form Vertical
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="exampleInputName1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" />
                                </div>

                                <!-- input addons -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <!-- select -->
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <!-- multi select -->
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Example multiple select</label>
                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <!-- input file -->
                                <div class="form-group">
                                    <label for="exampleInputFile1">File</label>
                                    <input type="file" class="form-control-file" id="exampleInputFile1" />
                                </div>

                                <!-- checkbox -->
                                <div class="form-group form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                                    <label class="form-check-label" for="defaultCheck1">
                                        Checkbox 1
                                    </label>
                                </div>
                                <div class="form-group form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" />
                                    <label class="form-check-label" for="defaultCheck2">
                                        Checkbox 2
                                    </label>
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"
                                        disabled />
                                    <label class="form-check-label" for="defaultCheck3">
                                        Checkbox 3 disabled
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group form-check mb-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1" checked />
                                    <label class="form-check-label" for="exampleRadios1">
                                        Radio 1
                                    </label>
                                </div>
                                <div class="form-group form-check mb-0">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios2" value="option2" />
                                    <label class="form-check-label" for="exampleRadios2">
                                        Radio 2
                                    </label>
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios3" value="option3" disabled />
                                    <label class="form-check-label" for="exampleRadios3">
                                        Radio 3 disabled
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include 'inc/footer.php'; ?>
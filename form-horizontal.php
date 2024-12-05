<?php include 'inc/header.php'; ?>
    <?php include 'inc/sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Form Horizontal</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Form Horizontal</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Form Horizontal
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="inputName3" class="col-sm-2 col-form-label">Nama</label>
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

                                <!-- multi select -->
                                <div class="form-group row">
                                    <label for="exampleFormControlSelectMulti" class="col-sm-2 col-form-label">Example
                                        multiple select</label>
                                    <div class="col-sm-10">
                                        <select multiple class="form-control" id="exampleFormControlSelectMulti">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- input file -->
                                <div class="form-group row">
                                    <label for="inputFile3" class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control-file" id="inputFile3" />
                                    </div>
                                </div>

                                <!-- radio -->
                                <fieldset class="form-group row">
                                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">
                                        Radios
                                    </legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked />
                                            <label class="form-check-label" for="gridRadios1">
                                                Radio 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2" />
                                            <label class="form-check-label" for="gridRadios2">
                                                Radio 2
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios3" value="option3" disabled />
                                            <label class="form-check-label" for="gridRadios3">
                                                Radio 3 disabled
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- checkbox -->
                                <fieldset class="form-group row">
                                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">
                                        Checkbox
                                    </legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="gridCheckbox1"
                                                id="gridCheckbox11" value="option1" checked />
                                            <label class="form-check-label" for="gridCheckbox1">
                                               Checkbox 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="gridCheckbox2"
                                                id="gridCheckbox2" value="option2" />
                                            <label class="form-check-label" for="gridCheckbox2">
                                               Checkbox 2
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="checkbox" name="gridCheckbox3"
                                                id="gridCheckbox3" value="option3" disabled />
                                            <label class="form-check-label" for="gridCheckbox3">
                                               Checkbox 3 disabled
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            Sign in
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include 'inc/footer.php'; ?>
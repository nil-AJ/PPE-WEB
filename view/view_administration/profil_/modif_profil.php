

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div  style="padding-bottom: 100px; padding-top: 100px" class="row">
        <div class="col-md-3 ">
            <div class="list-group ">
                <a href="?section=profil" class="list-group-item list-group-item-action ">Profil</a>
                <a href="?section=profil_modif" class="list-group-item list-group-item-action active">Modifier</a>
                <a href="#" class="list-group-item list-group-item-action">Suprimer</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Profil : <?= $_SESSION['user_info']['prename'] . ' ' . $_SESSION['user_info']['name'] ?></h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <form action="" method="post">
                                    <div class="form-group row">
                                        <label for="prename" class="col-4 col-form-label">Prename</label>
                                        <div class="col-8">
                                            <input id="prename" name="Mprename" placeholder="<?= $_SESSION['user_info']['prename']?>" class="disabled form-control here" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Name</label>
                                        <div class="col-8">
                                            <input id="name" name="Mname" placeholder="<?= $_SESSION['user_info']['name']?>" required="required"  class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email*</label>
                                        <div class="col-8">
                                            <input id="email" name="Memail" placeholder="<?= $_SESSION['user_info']['email']?>" required="required" class=" form-control here" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="number" class="col-4 col-form-label">Phone Number</label>
                                        <div class="col-8">
                                            <input id="number" name="MphoneNumber" placeholder="<?= $_SESSION['user_info']['phoneNumber']?>" class="form-control here" required="required" type="number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="role" class="col-4 col-form-label">Role</label>
                                        <div class="col-8">
                                            <select id="role" name="Mstatus" class="custom-select">
                                                <option value="administrator"><?= $_SESSION['user_info']['status']?></option>
                                                <option value="administrator">Administrator</option>
                                                <option value="author">Author</option>
                                                <option value="editor">Editor</option>
                                                <option value="contributor">Contributor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button  type="submit" class="btn btn-primary">Modifié</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

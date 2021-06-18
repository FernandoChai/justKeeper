<?= $this->extend('layoutAdmin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Profile</h1>
    <a href="/">
        <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </a>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form action="/Admin/update/<?= user()->id; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" autofocus value="<?= (old('username')) ? old('username') : user()->username; ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= (old('name')) ? old('name') : user()->name; ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dob" class="col-md-2 col-form-label">Date of Birth</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control <?= ($validation->hasError('dob')) ? 'is-invalid' : ''; ?>" id="dob" name="dob" value="<?= (old('dob')) ? old('dob') : user()->dob; ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= $validation->getError('dob'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gender" class="col-md col-form-label">Gender</label>
                    <div class="col-md-10">
                        <?php (old('gender')) ? $gen = old('gender') : $gen = user()->gender; ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?>" type="radio" name="gender" id="gender" value="Male" <?= ($gen == 'Male')  ? "checked" : ""; ?>>
                            <label class="form-check-label" for="gender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?>" type="radio" name="gender" id="gender2" value="Female" <?= ($gen == 'Female') ? "checked" : ""; ?>>
                            <label class="form-check-label" for="gender2">Female</label>
                            <div class="invalid-feedback" style="width: auto;">
                                <?= $validation->getError('gender'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-md-2 col-form-label">Address</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" id="address" name="address" value="<?= (old('address')) ? old('address') : user()->address; ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= $validation->getError('address'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="picture" class="col-md-2 col-form-label">Profile Picture</label>
                    <div class="col-md-10">
                        <input class="form-control <?= ($validation->hasError('picture')) ? 'is-invalid' : ''; ?>" type="file" id="picture" name="picture" onchange="previewPic()">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= $validation->getError('picture'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="picture" class="col-md-2 col-form-label">Preview image</label>
                    <div class="col-md-5">
                        <img src="/img/<?= user()->picture; ?>" class="img-thumbnail img-fluid img-preview" width="30%">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-inline">Save</button>
                <a href="/User" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
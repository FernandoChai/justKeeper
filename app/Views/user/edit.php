<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/profile-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-md-7 offset-md-3">
            <h2 class="my-3">Edit Profile</h2>
            <form action="/User/update/<?= user()->id; ?>" method="POST">
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
                    <label for="gender" class="col-md-2 col-form-label">Gender</label>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?>" type="radio" name="gender" id="gender" value="Male">
                            <label class="form-check-label" for="gender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?>" type="radio" name="gender" id="gender2" value="Female">
                            <label class="form-check-label" for="gender2">Female</label>
                            <div class="invalid-feedback d-inline">
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
                <button type="submit" class="btn btn-primary d-inline">Save</button>
                <a href="/User" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
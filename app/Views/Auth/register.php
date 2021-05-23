<?= $this->extend('Auth/templates/index'); ?>

<?= $this->section('content'); ?>


<div class="container ">
    <div class="row mt-3">
        <div class="col-md text-center ">
            <h1 class="mt-3">JustRent!</h1>
            <img src="/Img/Logo/LogoRegister.jpg" class="img-fluid" alt="logo">
            <p><b>Rent without hazzle only at JustRent!</b></p>
        </div>
        <div class="col-md">
            <h1 class="mt-3 text-center">Sign Up Now</h1>
            <p class="text-center mt-3">Already signed up?<a href="<?= route_to('login') ?>">Sign-In</a></p>
            <?= view('Myth\Auth\Views\_message_block') ?>

            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group mb-3">
                    <label for="email"><?= lang('Auth.email') ?></label>
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                </div>

                <div class="form-group mb-3">
                    <label for="username"><?= lang('Auth.username') ?></label>
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="password"><?= lang('Auth.password') ?></label>
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
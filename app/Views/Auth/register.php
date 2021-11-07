<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="/style/home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Register | JustKeeper</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md text-center ">
                <h1 class="mt-3">JustKeeper</h1>
                <img src="/Img/Logo/LogoRegister.jpg" class="img-fluid" alt="logo">
                <p><b>Rent without hazzle only at JustKeeper!</b></p>
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

    <?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="signup-form">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                        <?= session()->getFlashdata('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form action="/home/prosesLogin" class="mt-5 border p-4 bg-light shadow">
                    <?= csrf_field() ?>
                    <h4 class="mb-5 text-center text-secondary">Login to your account</h4>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label>Username<span class="text-danger">*</span></label>
                            <input type="username" name="username" class="form-control" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">Dont have an account, Please <a href="/home/register">Register</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <small>Note : </small><br>
            <small>(1).Basic Login CI4</small><br>
            <small>(2).With Password Encrypt/Decrypt</small><br>
            <small>(3).No Oauth2 (Its new for me, im sorry need more time to exploring this) </small><br>
            <small>(4).Fisrt login user : admin | pass : admin</small><br>
            <small>(5).PostgreeSQL</small>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
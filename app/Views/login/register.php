<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="/home/prosesRegister" method="POST" class="mt-5 border p-4 bg-light shadow">
                    <?= csrf_field() ?>
                    <h4 class="mb-5 text-secondary">Create Your Account</h4>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Username<span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary float-end" type="submit">Signup Now</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="/home">Login Now</a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="text-center mt-5">
    <h2>Welcome <?= session()->get('username'); ?></h2>

    <a href="/home/logout">Logout</a>

</div>

<?= $this->endSection() ?>
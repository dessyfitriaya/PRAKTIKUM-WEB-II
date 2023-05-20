<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Halo</h2>
            <?php foreach ($profil as $p) : ?>
                Anda sedang berada di Beranda milik <?= $p['nama']; ?> dengan NIM <?= $p['nim']; ?>
            <?php endforeach ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
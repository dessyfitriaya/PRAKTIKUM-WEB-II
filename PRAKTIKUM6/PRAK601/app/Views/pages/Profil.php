<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Profil</h2>
            <table class="table" style="width:40%">
                <tbody>
                    <tr>
                        <td rowspan="6"><img src=/img/4x6.jpg width="125px"></td>
                    </tr>
                    <?php foreach ($profil as $p) : ?>
                        <tr>
                            <th>Nama</th>
                            <td><?= $p['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td><?= $p['nim']; ?></td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td><?= $p['prodi']; ?></td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td><?= $p['hobi']; ?></td>
                        </tr>
                        <tr>
                            <th>Skill</th>
                            <td><?= $p['skill']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
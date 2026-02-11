<?= $this->extend('layout/BaseLayout') ?>

<?= $this->section('content') ?>
<!-- Content Section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <h2 class="fw-bolder mb-4">Data Biodata</h2>
                
                <?php if (!empty($biodata)): ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($biodata as $bd): ?>
                                    <tr>
                                        <td><?= $bd['id'] ?></td>
                                        <td><?= $bd['nama'] ?></td>
                                        <td><?= $bd['tempat_lahir'] ?></td>
                                        <td><?= $bd['tanggal_lahir'] ?></td>
                                        <td><?= $bd['alamat'] ?></td>
                                        <td><?= $bd['nomor_telepon'] ?></td>
                                        <td><?= $bd['jenis_kelamin'] ?></td>
                                        <td><?= $bd['pendidikan_terakhir'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info" role="alert">
                        Tidak ada data biodata.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

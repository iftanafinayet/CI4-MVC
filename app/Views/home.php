<?= $this->extend('layout/BaseLayout') ?>

<?= $this->section('content') ?>
<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">CodeIgniter 4 &middot; MVC Pattern &middot; PHP</div></div>
                    <div class="fs-3 fw-light text-muted">Welcome to</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">CI4 MVC Application</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="<?= base_url('/mahasiswa') ?>">Mahasiswa</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="<?= base_url('/biodata') ?>">Biodata</a>
                        <a class="btn btn-outline-secondary btn-lg px-5 py-3 fs-6 fw-bolder" href="<?= base_url('/main') ?>">Back to Main</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?= $this->endSection() ?>

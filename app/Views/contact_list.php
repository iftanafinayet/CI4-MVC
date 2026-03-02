<?= $this->extend('layout/PageLayout') ?>

<?= $this->section('content') ?>
<section class="py-5">
    <div class="container px-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bolder mb-0">Contact List</h2>
                    
                    <form action="" method="get" class="d-flex w-50">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search name, email, or phone..." value="<?= $keyword ?>">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($contacts) && is_array($contacts)) : ?>
                                <?php foreach ($contacts as $c) : ?>
                                    <tr>
                                        <td><?= esc($c['name']) ?></td>
                                        <td><?= esc($c['email']) ?></td>
                                        <td><?= esc($c['phone']) ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('contact/edit/' . $c['id']) ?>" class="btn btn-sm btn-outline-warning" title="Edit Data">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>

                                            <form action="<?= base_url('contact/delete/' . $c['id']) ?>" method="post" class="d-inline form-delete">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-outline-danger btn-hapus" title="Hapus Data">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">No data found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <?= $pager->links('contact_group', 'bootstrap_pagination') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.btn-hapus').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('.form-delete');
            
            Swal.fire({
                title: 'Yakin mau hapus?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
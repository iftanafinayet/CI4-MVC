<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->include('layout/HeadLayout') ?>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?= $this->include('layout/Navbar') ?>
            <!-- Header-->
            <?=  $this->renderSection('content') ?>
            <!-- About Section-->
             <?=  $this->renderSection('content') ?>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <?= $this->include('layout/FooterLayout') ?>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('js/scripts.js') ?>"></script>
                <script>
            document.querySelectorAll('.btn-hapus').forEach(button => {
                button.addEventListener('click', function(e) {
                    const form = this.closest('.form-delete');
                    
                    Swal.fire({
                        title: "Apakah Anda yakin?",
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, Hapus!",
                        cancelButtonText: "Batal"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); 
                        }
                    });
                });
            });
            <?php if (session()->getFlashdata('success')) : ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?= session()->getFlashdata('success') ?>',
                    timer: 2000,
                    showConfirmButton: false
                });
            <?php endif; ?>
        </script>
    </body>
</html>

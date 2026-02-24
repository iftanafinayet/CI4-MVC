<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>
                    <?= form_open('register/save'); ?>
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="formcontrol <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>"
                        value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="formcontrol <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>"
                        value="<?= old('email'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="formcontrol <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"
                        value="<?= old('password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confpassword">Confirm Password</label>
                        <input type="password" name="confpassword" class="formcontrol <?= ($validation->hasError('confpassword')) ? 'is-invalid' : ''; ?>"
                        value="<?= old('confpassword'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('confpassword'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('login') ?>" class="btn btnprimary"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</a>
                        <button class="btn btn-success"><i class="fa fasave"></i>&nbsp;Register</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
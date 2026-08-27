<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary">Form Edit Profil & Kontak</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('about/admin_index'); ?>" method="post">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="about_text">Deskripsi Tentang Kami</label>
                        <textarea class="form-control" id="about_text" name="about_text" rows="4" required><?= htmlspecialchars($profile->about_text); ?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="vision">Visi</label>
                        <textarea class="form-control" id="vision" name="vision" rows="3" required><?= htmlspecialchars($profile->vision); ?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mission">Misi</label>
                        <textarea class="form-control" id="mission" name="mission" rows="3" required><?= htmlspecialchars($profile->mission); ?></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($profile->phone); ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($profile->email); ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="address">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= htmlspecialchars($profile->address); ?>" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
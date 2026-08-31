<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('facilities/update/'.$facility->id); ?>" method="POST" enctype="multipart/form-data">
                
                <div class="form-group mb-3">
                    <label class="font-weight-bold">Nama Fasilitas</label>
                    <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($facility->name); ?>" required>
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Foto Fasilitas (Abaikan jika tidak ingin mengubah foto)</label>
                    <?php if(!empty($facility->image)): ?>
                        <div class="mb-2">
                            <img src="<?= base_url('uploads/facilities/' . $facility->image); ?>" alt="Gambar" width="150" class="img-thumbnail">
                        </div>
                    <?php endif; ?>
                    <input type="file" class="form-control" name="image">
                    <small class="text-muted">Format: JPG, JPEG, PNG (Maksimal 2MB)</small>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Deskripsi Singkat (Short Description)</label>
                    <input type="text" class="form-control" name="short_description" value="<?= htmlspecialchars($facility->short_description); ?>" required>
                    <?= form_error('short_description', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Deskripsi Lengkap (Description)</label>
                    <textarea class="form-control" name="description" rows="5" required><?= htmlspecialchars($facility->description); ?></textarea>
                    <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Status</label>
                    <select class="form-control" name="status" required>
                        <option value="1" <?= ($facility->status == 1) ? 'selected' : ''; ?>>Aktif (Tampil di Website)</option>
                        <option value="0" <?= ($facility->status == 0) ? 'selected' : ''; ?>>Tidak Aktif (Sembunyikan)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Fasilitas</button>
                <a href="<?= base_url('facilities/admin_index'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
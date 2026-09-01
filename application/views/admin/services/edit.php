<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Layanan</h6>
        </div>
        <div class="card-body">
            <!-- Tambahan enctype mutlak diperlukan untuk upload file -->
            <form action="<?= base_url('services/edit/' . $service->id); ?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group mb-3">
                    <label for="name" class="font-weight-bold">Nama Layanan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($service->name); ?>" required placeholder="Masukkan nama layanan">
                </div>

                <div class="form-group mb-3">
                    <label for="icon" class="font-weight-bold">Ikon Layanan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= htmlspecialchars($service->icon); ?>" required placeholder="Contoh: fas fa-tooth">
                    <small class="text-muted">Gunakan class dari <a href="https://fontawesome.com/icons" target="_blank">FontAwesome</a> (contoh: fas fa-stethoscope, fas fa-heartbeat).</small>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="font-weight-bold">Foto Layanan (Abaikan jika tidak ingin mengubah foto)</label>
                    
                    <!-- Menampilkan gambar lama jika ada -->
                    <?php if (!empty($service->image)) : ?>
                        <div class="mb-3">
                            <img src="<?= base_url('uploads/services/' . $service->image); ?>" alt="Foto <?= htmlspecialchars($service->name); ?>" class="img-thumbnail shadow-sm" style="max-height: 150px; object-fit: cover;">
                        </div>
                    <?php endif; ?>
                    
                    <input type="file" class="form-control" id="image" name="image">
                    <small class="text-muted">Format yang diizinkan: JPG, JPEG, PNG (Maksimal 2MB).</small>
                </div>

                <div class="form-group mb-3">
                    <label for="short_description" class="font-weight-bold">Deskripsi Singkat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="short_description" value="<?= htmlspecialchars($service->short_description); ?>" required placeholder="Deskripsi 1-2 kalimat untuk ditampilkan di kartu halaman depan">
                </div>

                <div class="form-group mb-4">
                    <label for="description" class="font-weight-bold">Deskripsi Lengkap <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Tulis deskripsi layanan di sini..."><?= htmlspecialchars($service->description); ?></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="status" class="font-weight-bold">Status <span class="text-danger">*</span></label>
                    <select class="form-control" id="status" name="status" required>
                        <!-- Pengecekan otomatis untuk menyeleksi status yang aktif saat ini -->
                        <option value="1" <?= ($service->status == 1) ? 'selected' : ''; ?>>Aktif (Tampil di Website)</option>
                        <option value="0" <?= ($service->status == 0) ? 'selected' : ''; ?>>Tidak Aktif (Sembunyikan)</option>
                    </select>
                </div>

                <hr class="mt-4 mb-4">

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Update Layanan
                </button>
                <a href="<?= base_url('services/admin_index'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
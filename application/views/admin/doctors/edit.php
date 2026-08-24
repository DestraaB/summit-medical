<div class="container-fluid">
    <h3 class="mb-4">
        Edit Dokter
    </h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="<?= base_url('doctors/update/' . $doctor->id); ?>" method="post" enctype="multipart/form-data">

                <!-- Specialty -->
                <div class="mb-3">
                    <label class="form-label">
                        Specialty
                    </label>
                    <select name="specialty_id" class="form-control" required>
                        <option value="">
                            -- Pilih Specialty --
                        </option>
                        <?php foreach ($specialties as $specialty) : ?>
                            <option value="<?= $specialty->id; ?>" <?= set_select('specialty_id', $specialty->id, ($specialty->id == $doctor->specialty_id)); ?>>
                                <?= htmlspecialchars($specialty->name); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('specialty_id', '<small class="text-danger">', '</small>'); ?>
                </div>

                <!-- Nama -->
                <div class="mb-3">
                    <label class="form-label">
                        Nama Dokter
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama dokter" value="<?= set_value('name', $doctor->name); ?>" required>
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>

                <!-- Foto -->
                <div class="mb-3">
                    <label class="form-label">
                        Foto Dokter
                    </label>
                    <input type="file" name="photo" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                </div>

                <!-- Pendidikan -->
                <div class="mb-3">
                    <label class="form-label">
                        Pendidikan
                    </label>
                    <textarea name="education" class="form-control" rows="3" placeholder="Masukkan pendidikan dokter"><?= set_value('education', $doctor->education); ?></textarea>
                    <?= form_error('education', '<small class="text-danger">', '</small>'); ?>
                </div>

                <!-- Pengalaman -->
                <div class="mb-3">
                    <label class="form-label">
                        Pengalaman
                    </label>
                    <textarea name="experience" class="form-control" rows="3" placeholder="Masukkan pengalaman dokter"><?= set_value('experience', $doctor->experience); ?></textarea>
                    <?= form_error('experience', '<small class="text-danger">', '</small>'); ?>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>
                    <textarea name="description" class="form-control" rows="5" placeholder="Masukkan deskripsi dokter"><?= set_value('description', $doctor->description); ?></textarea>
                    <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <label class="form-label">
                        Status
                    </label>
                    <select name="status" class="form-control" required>
                        <option value="1" <?= set_select('status', '1', ($doctor->status == 1)); ?>>
                            Aktif
                        </option>
                        <option value="0" <?= set_select('status', '0', ($doctor->status == 0)); ?>>
                            Tidak Aktif
                        </option>
                    </select>
                    <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Update Dokter
                </button>

                <a href="<?= base_url('doctors/admin_index'); ?>" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
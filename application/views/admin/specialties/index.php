<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row">
        <!-- Form Tambah Spesialisasi -->
        <div class="col-lg-4">
            <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Spesialisasi Baru</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('specialties/admin_index'); ?>" method="POST">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Nama Spesialisasi</label>
                            <input type="text" class="form-control" name="name" placeholder="Contoh: Spesialis Anak" required>
                        </div>
                        
                        <!-- TAMBAHAN: Input Ikon -->
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Ikon (FontAwesome)</label>
                            <input type="text" class="form-control" name="icon" placeholder="Contoh: fas fa-bone">
                            <small class="text-muted">Cari ikon di fontawesome.com</small>
                        </div>

                        <!-- TAMBAHAN: Input Deskripsi -->
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Deskripsi</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="Tulis deskripsi spesialisasi..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 shadow-sm">
                            <i class="fas fa-plus me-1"></i> Simpan Spesialisasi
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Spesialisasi -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Spesialisasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th width="10%" class="text-center">No</th>
                                    <th>Nama Spesialisasi</th>
                                    <!-- Tambahan Kolom Ikon -->
                                    <th class="text-center">Ikon</th>
                                    <th width="25%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($specialties)): ?>
                                    <?php $i=1; foreach($specialties as $s): ?>
                                    <tr>
                                        <td class="text-center align-middle"><?= $i++; ?></td>
                                        <td class="font-weight-bold text-dark align-middle"><?= htmlspecialchars($s->name); ?></td>
                                        <td class="text-center align-middle">
                                            <?php if(!empty($s->icon)): ?>
                                                <i class="<?= htmlspecialchars($s->icon); ?> fa-lg text-primary"></i>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Tidak ada</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <!-- TAMBAHAN: Tombol Edit memanggil Modal -->
                                            <button type="button" class="btn btn-warning btn-sm shadow-sm mb-1" data-bs-toggle="modal" data-bs-target="#editModal<?= $s->id; ?>">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            
                                            <a href="<?= base_url('specialties/delete/'.$s->id); ?>" class="btn btn-danger btn-sm shadow-sm mb-1" onclick="return confirm('Apakah Anda yakin ingin menghapus spesialisasi ini?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- TAMBAHAN: Modal Edit Spesialisasi -->
                                    <div class="modal fade" id="editModal<?= $s->id; ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $s->id; ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weight-bold text-primary" id="editModalLabel<?= $s->id; ?>">Edit Spesialisasi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="<?= base_url('specialties/update/'.$s->id); ?>" method="POST">
                                                    <div class="modal-body text-start">
                                                        <div class="form-group mb-3">
                                                            <label class="font-weight-bold text-dark">Nama Spesialisasi</label>
                                                            <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($s->name); ?>" required>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="font-weight-bold text-dark">Ikon (FontAwesome)</label>
                                                            <input type="text" class="form-control" name="icon" value="<?= htmlspecialchars($s->icon); ?>">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="font-weight-bold text-dark">Deskripsi</label>
                                                            <textarea class="form-control" name="description" rows="4"><?= htmlspecialchars($s->description); ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Akhir Modal Edit -->

                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-4">Belum ada data spesialisasi.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
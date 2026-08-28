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
                                    <th width="20%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($specialties)): ?>
                                    <?php $i=1; foreach($specialties as $s): ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="font-weight-bold text-dark"><?= htmlspecialchars($s->name); ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('specialties/delete/'.$s->id); ?>" class="btn btn-danger btn-sm shadow-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus spesialisasi ini?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-4">Belum ada data spesialisasi.</td>
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
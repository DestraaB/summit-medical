<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= htmlspecialchars($title ?? 'Kelola Services'); ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4 border-bottom-primary">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-list me-2"></i>Daftar Services (Layanan Medis)</h6>
            <a href="<?= base_url('services/create'); ?>" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Service
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <th width="10%" class="text-center">Ikon</th>
                            <th width="15%" class="text-center">Gambar</th>
                            <th width="20%">Nama Layanan</th>
                            <th width="25%">Deskripsi Singkat</th>
                            <th width="10%" class="text-center">Status</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($services)): ?>
                            <?php $i = 1; foreach ($services as $srv) : ?>
                            <tr>
                                <td class="text-center align-middle"><?= $i++; ?></td>
                                
                                <!-- Menampilkan Ikon -->
                                <td class="text-center align-middle h4 text-primary">
                                    <i class="<?= htmlspecialchars($srv->icon); ?>"></i>
                                </td>
                                
                                <!-- Menampilkan Gambar -->
                                <td class="text-center align-middle">
                                    <?php if(!empty($srv->image)): ?>
                                        <img src="<?= base_url('uploads/services/' . $srv->image); ?>" alt="<?= htmlspecialchars($srv->name); ?>" class="img-thumbnail shadow-sm" style="width: 80px; height: 80px; object-fit: cover;">
                                    <?php else: ?>
                                        <span class="badge badge-secondary">No Image</span>
                                    <?php endif; ?>
                                </td>
                                
                                <td class="font-weight-bold text-dark align-middle"><?= htmlspecialchars($srv->name); ?></td>
                                <td class="align-middle"><?= htmlspecialchars($srv->short_description); ?></td>
                                
                                <!-- Menampilkan Status -->
                                <td class="text-center align-middle">
                                    <?php if($srv->status == 1): ?>
                                        <span class="badge badge-success px-2 py-1">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger px-2 py-1">Tidak Aktif</span>
                                    <?php endif; ?>
                                </td>
                                
                                <td class="text-center align-middle">
                                    <a href="<?= base_url('services/edit/' . $srv->id); ?>" class="btn btn-warning btn-sm shadow-sm mb-1">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url('services/delete/' . $srv->id); ?>" class="btn btn-danger btn-sm shadow-sm mb-1" onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini?');">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <!-- Colspan disesuaikan dengan jumlah kolom baru (7) -->
                                <td colspan="7" class="text-center text-muted py-4">Belum ada data services. Silakan klik "Tambah Service" untuk memasukkan data baru.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
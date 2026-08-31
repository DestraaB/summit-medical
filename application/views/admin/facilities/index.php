<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Fasilitas</h6>
            <a href="<?= base_url('facilities/create'); ?>" class="btn btn-sm btn-primary">
                <i class="fas fa-plus"></i> Tambah Fasilitas
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <th width="15%" class="text-center">Gambar</th>
                            <th>Nama Fasilitas</th>
                            <th>Deskripsi Singkat</th>
                            <th class="text-center">Status</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($facilities)): ?>
                            <?php $i=1; foreach($facilities as $f): ?>
                            <tr>
                                <td class="text-center align-middle"><?= $i++; ?></td>
                                <td class="text-center align-middle">
                                    <?php if(!empty($f->image)): ?>
                                        <img src="<?= base_url('uploads/facilities/' . $f->image); ?>" alt="<?= htmlspecialchars($f->name); ?>" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                                    <?php else: ?>
                                        <span class="badge badge-secondary">No Image</span>
                                    <?php endif; ?>
                                </td>
                                <td class="align-middle font-weight-bold text-dark"><?= htmlspecialchars($f->name); ?></td>
                                <td class="align-middle"><?= htmlspecialchars($f->short_description); ?></td>
                                <td class="text-center align-middle">
                                    <?php if($f->status == 1): ?>
                                        <span class="badge badge-success px-2 py-1">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger px-2 py-1">Tidak Aktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="<?= base_url('facilities/edit/'.$f->id); ?>" class="btn btn-warning btn-sm mb-1"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('facilities/delete/'.$f->id); ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Yakin ingin menghapus fasilitas ini?');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="6" class="text-center text-muted">Belum ada data fasilitas.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
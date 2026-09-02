<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
            <a href="<?= base_url('news/create'); ?>" class="btn btn-primary btn-sm shadow-sm">
                <i class="fas fa-plus me-1"></i> Tambah Berita
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <!-- Kolom Preview Thumbnail -->
                            <th width="15%" class="text-center">Thumbnail</th>
                            <th width="35%">Judul Berita</th>
                            <th width="15%" class="text-center">Status</th>
                            <th width="15%" class="text-center">Tanggal</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($news_list)): ?>
                            <?php $i=1; foreach($news_list as $n): ?>
                            <tr>
                                <td class="text-center align-middle"><?= $i++; ?></td>
                                
                                <!-- Menampilkan Preview Gambar -->
                                <td class="text-center align-middle">
                                    <?php if(!empty($n->thumbnail)): ?>
                                        <img src="<?= base_url('uploads/news/' . $n->thumbnail); ?>" alt="Thumbnail" width="70" height="50" class="rounded shadow-sm border" style="object-fit: cover;">
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Tidak ada</span>
                                    <?php endif; ?>
                                </td>

                                <td class="align-middle font-weight-bold text-dark"><?= htmlspecialchars($n->title); ?></td>
                                
                                <td class="text-center align-middle">
                                    <?php if($n->status == 'published'): ?>
                                        <span class="badge bg-success">Published</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Draft</span>
                                    <?php endif; ?>
                                </td>

                                <td class="text-center align-middle">
                                    <?= !empty($n->published_at) ? date('d/m/Y', strtotime($n->published_at)) : '-'; ?>
                                </td>

                                <td class="text-center align-middle">
                                    <a href="<?= base_url('news/edit/' . $n->id); ?>" class="btn btn-warning btn-sm shadow-sm mb-1" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('news/delete/' . $n->id); ?>" class="btn btn-danger btn-sm shadow-sm mb-1" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">Belum ada data berita.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
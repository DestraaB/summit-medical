<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 text-primary">Daftar Berita</h6>
        <a href="<?= base_url('news/create'); ?>" class="btn btn-primary btn-sm">Tambah Berita</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Tanggal Publish</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($news_list as$news) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= htmlspecialchars($news->title); ?></td>
                        <td>
                            <?php if ($news->status == 'published'): ?>
                                <span class="badge bg-success text-white px-2 py-1">Published</span>
                            <?php else: ?>
                                <span class="badge bg-secondary text-white px-2 py-1">Draft</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $news->published_at ? date('d-m-Y H:i', strtotime($news->published_at)) : '-'; ?></td>
                        <td>
                            <a href="<?= base_url('news/edit/' . $news->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('news/delete/' . $news->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus berita ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
        </div>
        <div class="card-body">
            <?= form_open_multipart('news/update/' . $news->id); ?>
                
                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Judul Berita</label>
                    <input type="text" class="form-control" name="title" required value="<?= htmlspecialchars($news->title); ?>">
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Status Publikasi</label>
                    <select name="status" class="form-control">
                        <option value="draft" <?= ($news->status == 'draft') ? 'selected' : ''; ?>>Draft</option>
                        <option value="published" <?= ($news->status == 'published') ? 'selected' : ''; ?>>Published</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Thumbnail (Gambar Sampul)</label>
                    <?php if (!empty($news->thumbnail)): ?>
                        <div class="mb-2">
                            <img src="<?= base_url('uploads/news/' . $news->thumbnail); ?>" alt="Thumbnail" width="150" class="rounded shadow-sm border">
                        </div>
                    <?php endif; ?>
                    <input type="file" class="form-control" name="thumbnail">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Konten</label>
                    <textarea class="form-control" name="content" rows="8" required><?= htmlspecialchars($news->content); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm">
                    <i class="fas fa-save me-1"></i> Perbarui Berita
                </button>
                <a href="<?= base_url('news/admin_index'); ?>" class="btn btn-secondary shadow-sm">Batal</a>

            <?= form_close(); ?>
        </div>
    </div>
</div>
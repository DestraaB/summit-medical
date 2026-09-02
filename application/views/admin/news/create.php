<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Berita Baru</h6>
        </div>
        <div class="card-body">
            <?= form_open_multipart('news/store'); ?>
                
                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Judul Berita</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan judul berita..." required value="<?= set_value('title'); ?>">
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Status Publikasi</label>
                    <select name="status" class="form-control">
                        <option value="draft">Draft (Belum Ditayangkan)</option>
                        <option value="published">Published (Langsung Tayang)</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Thumbnail (Gambar Sampul)</label>
                    <input type="file" class="form-control" name="thumbnail">
                    <small class="text-muted">Format yang diizinkan: jpg, jpeg, png, webp (Maks. 2MB).</small>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Konten</label>
                    <textarea class="form-control" name="content" rows="8" placeholder="Tulis isi berita di sini..." required><?= set_value('content'); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm">
                    <i class="fas fa-save me-1"></i> Simpan Berita
                </button>
                <a href="<?= base_url('news/admin_index'); ?>" class="btn btn-secondary shadow-sm">Batal</a>

            <?= form_close(); ?>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('news/create'); ?>" method="post">
            <div class="form-group mb-3">
                <label>Judul Berita</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group mb-3">
                <label>Konten</label>
                <textarea class="form-control" name="content" rows="10" required></textarea>
            </div>
            <div class="form-group mb-4">
                <label>Status Publikasi</label>
                <select name="status" class="form-control">
                    <option value="draft">Draft (Simpan sementara)</option>
                    <option value="published">Published (Tampilkan ke publik)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
            <a href="<?= base_url('news/admin_index'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
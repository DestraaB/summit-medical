<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Fasilitas</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('facilities/create'); ?>" method="post">
                <div class="form-group mb-3">
                    <label>Nama Fasilitas</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label>Deskripsi Singkat</label>
                    <input type="text" class="form-control" name="short_description">
                </div>
                <div class="form-group mb-3">
                    <label>Deskripsi Lengkap</label>
                    <textarea class="form-control" name="description" rows="5" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Fasilitas</button>
                <a href="<?= base_url('facilities/admin_index'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
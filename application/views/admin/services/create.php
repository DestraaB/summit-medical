<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary">Form Tambah Layanan</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('services/create'); ?>" method="post">
                <div class="form-group mb-3">
                    <label for="name">Nama Layanan</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan nama layanan">
                </div>

                <div class="form-group mb-4">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Tulis deskripsi layanan di sini..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Layanan</button>
                <a href="<?= base_url('services/admin_index'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
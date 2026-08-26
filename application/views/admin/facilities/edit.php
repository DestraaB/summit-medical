<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary">Form Edit Fasilitas</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('facilities/edit/' . $facility->id); ?>" method="post">
                <div class="form-group mb-3">
                    <label for="name">Nama Fasilitas</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($facility->name); ?>" required placeholder="Masukkan nama fasilitas">
                </div>

                <div class="form-group mb-4">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Tulis deskripsi fasilitas di sini..."><?= htmlspecialchars($facility->description); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Fasilitas</button>
                <a href="<?= base_url('facilities/admin_index'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
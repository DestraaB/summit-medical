<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary">Form Edit Artikel</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('articles/edit/' . $article->id); ?>" method="post">
                <div class="form-group mb-3">
                    <label for="title">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($article->title); ?>" required placeholder="Masukkan judul artikel">
                </div>

                <div class="form-group mb-4">
                    <label for="content">Isi Artikel</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required placeholder="Tulis konten artikel di sini..."><?= htmlspecialchars($article->content); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update Artikel
                </button>
                <a href="<?= base_url('articles/admin_index'); ?>" class="btn btn-secondary">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>
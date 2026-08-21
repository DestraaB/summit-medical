<section class="articles-page">

    <div class="articles-container">

        <div class="articles-header">

            <div>
                <span class="section-label">ARTIKEL</span>

                <h1>Tambah Artikel</h1>

                <p>
                    Tambahkan artikel kesehatan baru.
                </p>
            </div>

            <a href="<?= base_url('articles'); ?>" class="btn-primary">
                Kembali
            </a>

        </div>


        <div class="article-form-wrapper">

            <form action="<?= base_url('articles/create'); ?>" method="post">

                <div class="form-group">

                    <label for="title">
                        Judul Artikel
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        placeholder="Masukkan judul artikel"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="slug">
                        Slug
                    </label>

                    <input
                        type="text"
                        id="slug"
                        name="slug"
                        placeholder="contoh: tips-menjaga-kesehatan"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="content">
                        Isi Artikel
                    </label>

                    <textarea
                        id="content"
                        name="content"
                        rows="10"
                        placeholder="Tulis isi artikel..."
                        required
                    ></textarea>

                </div>


                <div class="form-actions">

                    <a
                        href="<?= base_url('articles'); ?>"
                        class="btn-cancel">
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn-primary">
                        Simpan Artikel
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>
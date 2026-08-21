<section class="articles-page">

    <div class="articles-container">

        <div class="articles-header">

            <div>
                <span class="section-label">ARTIKEL</span>

                <h1>Edit Artikel</h1>

                <p>
                    Perbarui informasi artikel.
                </p>
            </div>

            <a href="<?= base_url('articles'); ?>" class="btn-primary">
                Kembali
            </a>

        </div>


        <div class="article-form-wrapper">

            <form action="<?= base_url('articles/edit/' . $article->id); ?>" method="post">

                <div class="form-group">

                    <label for="title">
                        Judul Artikel
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="<?= htmlspecialchars($article->title); ?>"
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
                        value="<?= htmlspecialchars($article->slug); ?>"
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
                        required
                    ><?= htmlspecialchars($article->content); ?></textarea>

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
                        Update Artikel
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>
<section class="article-detail-page">

    <div class="container">

        <div class="article-detail-header">

            <span class="section-label">
                ARTIKEL KESEHATAN
            </span>

            <h1>
                <?= htmlspecialchars($article->title); ?>
            </h1>

            <div class="article-meta">

                <span>
                    <?= date('d F Y', strtotime($article->created_at)); ?>
                </span>

            </div>

        </div>


        <div class="article-detail-content">

            <?= nl2br(htmlspecialchars($article->content)); ?>

        </div>


        <div class="article-detail-footer">

            <a
                href="<?= base_url(); ?>"
                class="article-back">

                ← Kembali ke Beranda

            </a>

        </div>

    </div>

</section>
<div class="container mt-5 mb-5">
    <div class="row mb-5 text-center" data-aos="fade-down">
        <div class="col-12">
            <h1 class="h2 text-primary" style="font-weight: 700;">Berita & Artikel Kesehatan</h1>
            <p class="text-muted">Informasi terbaru seputar kegiatan rumah sakit dan edukasi kesehatan.</p>
        </div>
    </div>
    <div class="row g-4">
        <?php if (!empty($news_list)) : ?>
            <?php foreach ($news_list as $n) : ?>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 1rem; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top img-zoom-hover" alt="Artikel">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="mb-2" style="font-weight: 700;"><?= htmlspecialchars($n->title); ?></h5>
                            <div class="text-primary small mb-3">
                                <?= date('d M Y', strtotime($n->published_at)); ?> 
                                <?= $n->author_name ? ' | Oleh ' . htmlspecialchars($n->author_name) : ''; ?>
                            </div>
                            <p class="text-muted small mb-4"><?= substr(strip_tags($n->content), 0, 100); ?>...</p>
                            <a href="<?= base_url('news/detail/' . $n->slug); ?>" class="btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center"><p class="text-muted">Belum ada berita yang dipublikasikan.</p></div>
        <?php endif; ?>
    </div>
</div>
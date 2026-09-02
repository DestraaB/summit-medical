<!-- Menyisipkan CSS Eksternal -->
<link rel="stylesheet" href="<?= base_url('assets/css/news.css'); ?>">

<!-- --- HTML Struktur Halaman Index Berita --- -->
<div class="news-hero">
    <div class="container">
        <span class="badge-news">Informasi & Artikel</span>
        <h1>Berita Kesehatan Terkini</h1>
        <p>Dapatkan informasi medis terbaru, tips kesehatan terpercaya, serta berbagai kegiatan edukatif dari tim medis Summit Medical Center.</p>
    </div>
</div>

<div class="news-container">
    <?php if (!empty($news)): ?>
        <?php foreach ($news as $item): ?>
            <a href="<?= site_url('news/detail/' . $item->slug); ?>" class="news-card">
                
                <!-- Gambar Thumbnail -->
                <div class="news-img-wrapper">
                    <?php if (!empty($item->thumbnail)): ?>
                        <img src="<?= base_url('uploads/news/' . $item->thumbnail); ?>" alt="<?= htmlspecialchars($item->title); ?>">
                    <?php else: ?>
                        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80" alt="Default News">
                    <?php endif; ?>
                </div>

                <!-- Bagian Teks Berita -->
                <div class="news-content">
                    <div class="news-date">
                        <i class="far fa-calendar-alt"></i> 
                        <?= date('d M Y', strtotime($item->published_at)); ?>
                    </div>

                    <h3 class="news-title">
                        <?= htmlspecialchars($item->title); ?>
                    </h3>

                    <p class="news-excerpt">
                        <?php 
                            $clean_content = strip_tags($item->content);
                            echo (strlen($clean_content) > 120) ? substr($clean_content, 0, 120) . '...' : $clean_content;
                        ?>
                    </p>

                    <span class="news-link">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

            </a>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="news-empty">
            <i class="fas fa-newspaper fa-4x mb-3 text-muted" style="opacity: 0.3;"></i>
            <h4>Belum ada berita atau artikel yang dipublikasikan saat ini.</h4>
            <p class="text-muted mb-0">Silakan kembali lagi nanti untuk mendapatkan informasi kesehatan terbaru.</p>
        </div>
    <?php endif; ?>
</div>
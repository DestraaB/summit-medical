<style>
    /* =========================================
       CSS DETAIL BERITA (Selaras dengan Spesialisasi)
    ========================================= */
    body {
        background-color: #f8fbfc;
    }

    /* --- Banner Hero --- */
    .news-detail-hero {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        padding: 80px 20px 140px;
        text-align: center;
        border-radius: 0 0 50px 50px;
        color: #ffffff;
        margin-bottom: -80px;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 30px rgba(0, 86, 179, 0.2);
    }

    .news-detail-hero .badge-date {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.2);
        padding: 6px 20px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 20px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .news-detail-hero h1 {
        font-size: 38px;
        font-weight: 800;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.3;
    }

    /* --- Container Grid Utama --- */
    .news-detail-container {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px 80px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }

    @media (max-width: 991px) {
        .news-detail-container {
            grid-template-columns: 1fr;
        }
    }

    /* --- Kartu Konten & Sidebar --- */
    .news-main-card, .news-sidebar-widget {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 86, 179, 0.05);
    }

    /* --- Gambar Thumbnail di Detail --- */
    .news-featured-img {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 16px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }

    .news-body-content {
        color: #5a6a7c;
        font-size: 16px;
        line-height: 1.9;
    }

    .news-body-content p {
        margin-bottom: 20px;
    }

    /* --- Tombol Kembali --- */
    .btn-back-news {
        display: inline-flex;
        align-items: center;
        margin-top: 25px;
        color: #0056b3;
        font-weight: 700;
        text-decoration: none;
        padding: 12px 25px;
        background: #f0f6fc;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .btn-back-news i {
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .btn-back-news:hover {
        background: #0056b3;
        color: #ffffff;
    }

    .btn-back-news:hover i {
        transform: translateX(-5px);
    }

    /* --- Sidebar Widget Styling --- */
    .news-sidebar-widget h3 {
        color: #2c3e50;
        font-weight: 800;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .news-sidebar-widget p {
        color: #6c757d;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .btn-schedule-sidebar {
        display: block;
        text-align: center;
        background: #0056b3;
        color: #ffffff;
        padding: 14px 20px;
        border-radius: 30px;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 8px 20px rgba(0, 86, 179, 0.2);
        transition: all 0.3s ease;
    }

    .btn-schedule-sidebar:hover {
        background: #003d82;
        color: #ffffff;
        transform: translateY(-2px);
    }
</style>

<!-- --- HTML Struktur Detail Berita --- -->
<div class="news-detail-hero">
    <div class="container">
        <div class="badge-date">
            <i class="far fa-calendar-alt"></i> 
            <?= !empty($news->published_at) ? date('d F Y', strtotime($news->published_at)) : ''; ?>
        </div>
        <h1><?= htmlspecialchars($news->title); ?></h1>
    </div>
</div>

<div class="news-detail-container">
    <!-- Kolom Kiri: Konten Berita & Gambar -->
    <div class="main-content">
        <div class="news-main-card">
            
            <!-- Gambar Thumbnail Utama -->
            <?php if (!empty($news->thumbnail)): ?>
                <img src="<?= base_url('uploads/news/' . $news->thumbnail); ?>" alt="<?= htmlspecialchars($news->title); ?>" class="news-featured-img">
            <?php endif; ?>

            <!-- Isi Konten Berita -->
            <div class="news-body-content">
                <?= $news->content; ?>
            </div>

        </div>

        <a href="<?= site_url('news'); ?>" class="btn-back-news">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Berita
        </a>
    </div>

    <!-- Kolom Kanan: Sidebar -->
    <div class="sidebar-content">
        <div class="news-sidebar-widget">
            <h3>Butuh Konsultasi?</h3>
            <p>Jadwalkan pemeriksaan kesehatan Anda bersama dokter spesialis terpercaya kami di Summit Medical Center.</p>
            <a href="<?= site_url('schedule'); ?>" class="btn-schedule-sidebar">
                <i class="fas fa-calendar-check me-2"></i> Buat Janji Temu
            </a>
        </div>
    </div>
</div>
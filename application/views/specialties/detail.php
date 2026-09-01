<style>
    /* =========================================
       CSS ROMBAK TOTAL DETAIL SPESIALISASI
    ========================================= */
    body {
        background-color: #f8fbfc;
    }

    /* --- Hero/Banner Section --- */
    .detail-hero-modern {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        padding: 80px 20px 140px;
        text-align: center;
        border-radius: 0 0 50px 50px;
        color: #ffffff;
        margin-bottom: -80px; /* Menarik konten agar menimpa banner */
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 30px rgba(0, 86, 179, 0.2);
    }

    .hero-icon-wrapper {
        width: 120px;
        height: 120px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 55px;
        color: #ffffff;
        backdrop-filter: blur(5px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        margin-bottom: 25px;
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.1);
    }

    .detail-hero-modern .badge-custom {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        padding: 6px 20px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .detail-hero-modern h1 {
        font-size: 42px;
        font-weight: 800;
        margin: 0;
    }

    /* --- Layout Konten (Grid Kiri & Kanan) --- */
    .detail-container {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px 80px;
        display: grid;
        grid-template-columns: 2fr 1fr; /* Kolom kiri lebih besar */
        gap: 40px;
    }

    @media (max-width: 991px) {
        .detail-container {
            grid-template-columns: 1fr; /* Menjadi 1 kolom di layar kecil */
        }
    }

    /* --- Desain Kartu Konten --- */
    .content-card-modern, .sidebar-widget-modern {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 86, 179, 0.05);
    }

    .content-card-modern h2, .sidebar-widget-modern h3 {
        color: #2c3e50;
        font-weight: 800;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
    }

    .content-card-modern h2 i {
        color: #0056b3;
        margin-right: 12px;
        font-size: 24px;
    }

    .description-text p {
        color: #5a6a7c;
        font-size: 16px;
        line-height: 1.9;
        margin-bottom: 20px;
    }

    /* --- Tombol Kembali --- */
    .btn-back-modern {
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

    .btn-back-modern i {
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .btn-back-modern:hover {
        background: #0056b3;
        color: #ffffff;
    }

    .btn-back-modern:hover i {
        transform: translateX(-5px); /* Panah bergeser ke kiri */
    }

    /* --- Desain Sidebar --- */
    .sidebar-widget-modern p {
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .btn-appointment-modern {
        display: block;
        text-align: center;
        background: #0056b3;
        color: #ffffff;
        padding: 16px 20px;
        border-radius: 30px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 86, 179, 0.2);
    }

    .btn-appointment-modern i {
        margin-right: 8px;
    }

    .btn-appointment-modern:hover {
        background: #003d82;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(0, 86, 179, 0.3);
        color: #ffffff;
    }

    .contact-info-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-info-list li {
        display: flex;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #edf2f7;
        color: #5a6a7c;
        font-weight: 600;
    }

    .contact-info-list li:last-child {
        border-bottom: none;
    }

    .contact-info-list li i {
        width: 40px;
        height: 40px;
        background: #f0f6fc;
        color: #0056b3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 18px;
    }
</style>

<!-- --- HTML Struktur --- -->
<div class="detail-hero-modern">
    <div class="container">
        <div class="hero-icon-wrapper">
            <?php if (!empty($specialty->icon)): ?>
                <i class="<?= htmlspecialchars($specialty->icon); ?>"></i>
            <?php else: ?>
                <i class="fas fa-stethoscope"></i>
            <?php endif; ?>
        </div>
        <br>
        <span class="badge-custom">Detail Spesialisasi</span>
        <h1><?= htmlspecialchars($specialty->name); ?></h1>
    </div>
</div>

<div class="detail-container">
    <!-- Kolom Kiri: Deskripsi Utama -->
    <div class="main-content">
        <div class="content-card-modern">
            <h2><i class="fas fa-info-circle"></i> Tentang Layanan Ini</h2>
            <div class="description-text">
                <?php if (!empty($specialty->description)): ?>
                    <p><?= nl2br(htmlspecialchars($specialty->description)); ?></p>
                <?php else: ?>
                    <p class="text-muted">Informasi deskripsi layanan untuk spesialisasi ini belum tersedia saat ini. Silakan hubungi pusat informasi kami untuk detail lebih lanjut.</p>
                <?php endif; ?>
            </div>
        </div>

        <a href="<?= site_url('specialties'); ?>" class="btn-back-modern">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Spesialisasi
        </a>
    </div>

    <!-- Kolom Kanan: Sidebar Widget -->
    <div class="sidebar-content">
        <!-- Widget Buat Janji -->
        <div class="sidebar-widget-modern" style="margin-bottom: 30px;">
            <h3>Konsultasi Medis</h3>
            <p>Jangan tunda penanganan kesehatan Anda. Segera jadwalkan pertemuan dengan tim dokter spesialis kami.</p>
            <a href="<?= site_url('schedule'); ?>" class="btn-appointment-modern">
                <i class="fas fa-calendar-alt"></i> Buat Janji Temu
            </a>
        </div>

        <!-- Widget Kontak Cepat -->
        <div class="sidebar-widget-modern">
            <h3>Pusat Bantuan</h3>
            <ul class="contact-info-list">
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <span style="display: block; font-size: 12px; color: #8c98a4;">Emergency 24/7</span>
                        (0274) 123-4567
                    </div>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <div>
                        <span style="display: block; font-size: 12px; color: #8c98a4;">Email Kami</span>
                        halo@summitmedical.com
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
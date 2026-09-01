<style>
    /* --- CSS Khusus Halaman Detail Spesialisasi --- */

    /* Bagian Header Atas */
    .page-header {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #f8fbfc 0%, #eef5fc 100%);
        border-bottom: 1px solid #e5eff8;
    }
    .page-header .section-label {
        display: inline-block;
        background-color: #e0ebf5;
        color: #0056b3;
        padding: 6px 15px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
    }
    .page-header h1 {
        font-size: 38px;
        color: #2c3e50;
        margin-bottom: 10px;
        font-weight: 800;
        text-transform: capitalize;
    }
    .page-header p {
        color: #6c757d;
        font-size: 16px;
    }

    /* Bagian Konten Detail */
    .specialty-detail-section {
        padding: 80px 20px;
        background-color: #ffffff;
    }
    
    /* Layout Kartu (Flexbox untuk menyampingkan Ikon & Teks) */
    .specialty-detail-card {
        max-width: 900px;
        margin: 0 auto; /* Posisi di tengah layar */
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05); /* Efek bayangan lembut */
        border: 1px solid #edf2f7;
        display: flex;
        flex-direction: row;
        padding: 50px;
        gap: 50px;
        align-items: flex-start;
    }

    /* Desain Ikon Stetoskop/Spesialisasi */
    .specialty-detail-icon {
        flex-shrink: 0;
        width: 130px;
        height: 130px;
        background-color: #f0f6fc;
        color: #0056b3; /* Warna biru medis */
        border-radius: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 55px; /* Membesarkan ukuran ikon */
        transform: rotate(-5deg); /* Sedikit dimiringkan agar dinamis */
        box-shadow: 0 8px 20px rgba(0, 86, 179, 0.1);
    }

    /* Desain Teks di dalam Kartu */
    .specialty-detail-content .section-label {
        display: inline-block;
        color: #8c98a4;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }
    .specialty-detail-content h2 {
        font-size: 32px;
        color: #2c3e50;
        margin-bottom: 25px;
        font-weight: 700;
        text-transform: capitalize;
    }
    .specialty-detail-content p {
        color: #5a6a7c;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 35px;
    }

    /* Tombol Kembali */
    .specialty-back {
        display: inline-block;
        color: #0056b3;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        padding: 10px 20px;
        background: #f0f6fc;
        border-radius: 30px;
        transition: all 0.3s ease;
    }
    .specialty-back:hover {
        background: #0056b3;
        color: #ffffff;
        transform: translateX(-5px); /* Animasi geser ke kiri saat disorot */
    }

    /* Responsif untuk Layar HP (Mobile) */
    @media (max-width: 768px) {
        .specialty-detail-card {
            flex-direction: column; /* Ubah layout jadi atas-bawah */
            padding: 30px 20px;
            align-items: center;
            text-align: center;
            gap: 30px;
        }
        .specialty-detail-icon {
            transform: rotate(0deg);
        }
    }
</style><section class="detail-header">
    <div class="container text-center">
        <div class="header-icon-large">
            <?php if (!empty($specialty->icon)): ?>
                <i class="<?= htmlspecialchars($specialty->icon); ?>"></i>
            <?php else: ?>
                <i class="fas fa-stethoscope"></i>
            <?php endif; ?>
        </div>
        <span class="section-label mt-3">DETAIL LAYANAN</span>
        <h1 class="detail-title"><?= htmlspecialchars($specialty->name); ?></h1>
    </div>
</section>

<section class="detail-content-section">
    <div class="container">
        <div class="detail-layout">
            
            <!-- Kolom Kiri: Deskripsi Utama -->
            <div class="main-description">
                <div class="content-card">
                    <h2>Tentang Spesialisasi Ini</h2>
                    <div class="description-text">
                        <?php if (!empty($specialty->description)): ?>
                            <p><?= nl2br(htmlspecialchars($specialty->description)); ?></p>
                        <?php else: ?>
                            <p class="text-muted">Deskripsi untuk layanan ini belum tersedia.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <a href="<?= site_url('specialties'); ?>" class="btn-back">
                    &larr; Kembali ke Daftar Spesialisasi
                </a>
            </div>

            <!-- Kolom Kanan: Sidebar Aksi -->
            <div class="detail-sidebar">
                <div class="sidebar-widget action-widget">
                    <h3>Butuh Layanan Ini?</h3>
                    <p>Jangan tunda kesehatan Anda. Jadwalkan konsultasi dengan dokter spesialis kami sekarang.</p>
                    <a href="<?= site_url('schedule'); ?>" class="btn-appointment">
                        <i class="fas fa-calendar-check"></i> Buat Janji Temu
                    </a>
                </div>

                <div class="sidebar-widget info-widget">
                    <h3>Pusat Bantuan</h3>
                    <ul class="contact-list">
                        <li><i class="fas fa-phone-alt"></i> Layanan Darurat 24/7</li>
                        <li><i class="fas fa-envelope"></i> info@summitmedical.com</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
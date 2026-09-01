<style>
    /* =========================================
       CSS ROMBAK TOTAL SPESIALISASI PUBLIK
    ========================================= */
    body {
        background-color: #f8fbfc;
    }

    /* --- Hero/Banner Section --- */
    .specialties-hero {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        color: #ffffff;
        padding: 100px 20px 120px;
        border-radius: 0 0 50px 50px;
        text-align: center;
        margin-bottom: -60px; /* Menarik card agar menimpa banner */
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 30px rgba(0, 86, 179, 0.2);
    }

    .badge-custom {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        padding: 8px 25px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .specialties-hero h1 {
        font-size: 46px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .specialties-hero p {
        font-size: 18px;
        color: #e0ebf5;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* --- Card Grid Layout --- */
    .specialties-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 80px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    /* --- Card Design --- */
    .specialty-card-modern {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px 30px;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 86, 179, 0.05);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .specialty-card-modern:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 50px rgba(0, 86, 179, 0.15);
        border-color: #cce0f5;
    }

    /* --- Icon Wrapper --- */
    .icon-wrapper {
        width: 100px;
        height: 100px;
        background: #f0f6fc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 45px;
        color: #0056b3;
        margin-bottom: 25px;
        transition: all 0.5s ease;
        position: relative;
    }

    /* Efek lingkaran luar saat dihover */
    .icon-wrapper::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px dashed #0056b3;
        opacity: 0;
        transition: all 0.5s ease;
        transform: scale(0.8);
    }

    .specialty-card-modern:hover .icon-wrapper {
        background: #0056b3;
        color: #ffffff;
        transform: scale(1.05);
    }

    .specialty-card-modern:hover .icon-wrapper::after {
        opacity: 0.3;
        transform: scale(1.2);
        animation: rotateDash 10s linear infinite;
    }

    @keyframes rotateDash {
        100% { transform: scale(1.2) rotate(360deg); }
    }

    /* --- Typography dalam Card --- */
    .specialty-card-modern h3 {
        color: #2c3e50;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
        transition: color 0.3s;
    }

    .specialty-card-modern:hover h3 {
        color: #0056b3;
    }

    .specialty-desc {
        color: #6c757d;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 30px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* --- Tombol Aksi --- */
    .btn-outline-modern {
        display: inline-block;
        padding: 12px 30px;
        border: 2px solid #e0ebf5;
        color: #0056b3;
        font-weight: 700;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: auto; /* Memaksa tombol selalu di bawah */
        background: transparent;
    }

    .btn-outline-modern i {
        margin-left: 8px;
        transition: transform 0.3s;
    }

    .specialty-card-modern:hover .btn-outline-modern {
        background: #0056b3;
        color: #ffffff;
        border-color: #0056b3;
    }

    .specialty-card-modern:hover .btn-outline-modern i {
        transform: translateX(5px); /* Panah bergerak ke kanan */
    }

    /* Empty State */
    .empty-state {
        grid-column: 1 / -1;
        text-align: center;
        padding: 80px 20px;
        background: #ffffff;
        border-radius: 24px;
        border: 2px dashed #cce0f5;
    }
</style>

<!-- --- HTML Struktur --- -->
<div class="specialties-hero">
    <div class="container">
        <span class="badge-custom">Layanan Medis Unggulan</span>
        <h1>Spesialisasi Kami</h1>
        <p>Kami menghadirkan tenaga medis profesional dari berbagai bidang keahlian, didukung fasilitas modern untuk memberikan perawatan kesehatan terbaik bagi Anda.</p>
    </div>
</div>

<div class="specialties-container">
    <?php if (!empty($specialties)): ?>
        <?php foreach ($specialties as $specialty): ?>
            
            <a href="<?= site_url('specialties/detail/' . $specialty->id); ?>" class="specialty-card-modern">
                <div class="icon-wrapper">
                    <?php if (!empty($specialty->icon)): ?>
                        <i class="<?= htmlspecialchars($specialty->icon); ?>"></i>
                    <?php else: ?>
                        <i class="fas fa-stethoscope"></i>
                    <?php endif; ?>
                </div>
                
                <h3><?= htmlspecialchars($specialty->name); ?></h3>
                
                <?php if (!empty($specialty->description)): ?>
                    <p class="specialty-desc">
                        <?= htmlspecialchars($specialty->description); ?>
                    </p>
                <?php else: ?>
                    <p class="specialty-desc text-muted">
                        Informasi deskripsi layanan untuk spesialisasi ini belum tersedia.
                    </p>
                <?php endif; ?>

                <span class="btn-outline-modern">
                    Lihat Detail <i class="fas fa-arrow-right"></i>
                </span>
            </a>

        <?php endforeach; ?>
    <?php else: ?>
        <div class="empty-state">
            <i class="fas fa-notes-medical fa-4x text-muted mb-3" style="opacity: 0.3;"></i>
            <h4 class="text-muted">Data spesialisasi belum tersedia saat ini.</h4>
        </div>
    <?php endif; ?>
</div>
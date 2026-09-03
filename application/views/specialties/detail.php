<style>
    /* =========================================
       CSS DETAIL SPESIALISASI (SLIDE IN ANIMASI)
    ========================================= */
    body { background-color: #f8fbfc; overflow-x: hidden; }

    /* --- Keyframes --- */
    @keyframes fadeSlideDownSpec { 0% { opacity: 0; transform: translateY(-30px); } 100% { opacity: 1; transform: translateY(0); } }
    @keyframes slideInLeftSpec { 0% { opacity: 0; transform: translateX(-50px); } 100% { opacity: 1; transform: translateX(0); } }
    @keyframes slideInRightSpec { 0% { opacity: 0; transform: translateX(50px); } 100% { opacity: 1; transform: translateX(0); } }
    @keyframes floatingBtn { 0%, 100% { transform: translateY(0); box-shadow: 0 8px 20px rgba(0,86,179,0.2); } 50% { transform: translateY(-5px); box-shadow: 0 12px 25px rgba(0,86,179,0.3); } }

    .spec-detail-hero {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        padding: 80px 20px 140px;
        text-align: center;
        border-radius: 0 0 50px 50px;
        color: #ffffff;
        margin-bottom: -80px;
        position: relative;
        z-index: 1;
        opacity: 0;
        animation: fadeSlideDownSpec 0.8s ease-out forwards;
    }

    .spec-detail-hero h1 { font-size: 38px; font-weight: 800; }

    .spec-detail-container {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px 80px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }

    @media (max-width: 991px) { .spec-detail-container { grid-template-columns: 1fr; } }

    /* Animasi Konten */
    .spec-main-content { opacity: 0; animation: slideInLeftSpec 0.8s ease-out 0.2s forwards; }
    .spec-sidebar-content { opacity: 0; animation: slideInRightSpec 0.8s ease-out 0.4s forwards; }

    .spec-card-white {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 86, 179, 0.05);
    }

    .spec-icon-large {
        width: 100px;
        height: 100px;
        background: #f0f6fc;
        color: #0056b3;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 45px;
        margin-bottom: 30px;
    }

    .spec-body-text { color: #5a6a7c; font-size: 16px; line-height: 1.9; }
    
    .btn-back-spec {
        display: inline-flex; align-items: center; margin-top: 25px; color: #0056b3;
        font-weight: 700; text-decoration: none; padding: 12px 25px; background: #f0f6fc;
        border-radius: 30px; transition: all 0.3s ease;
    }
    .btn-back-spec:hover { background: #0056b3; color: #ffffff; }
    .btn-back-spec:hover i { transform: translateX(-5px); }
    .btn-back-spec i { margin-right: 10px; transition: transform 0.3s ease; }

    /* Sidebar widget */
    .sidebar-widget h3 { font-size: 20px; font-weight: 800; color: #2c3e50; margin-bottom: 20px; }
    .sidebar-widget p { color: #6c757d; font-size: 14px; line-height: 1.6; margin-bottom: 20px; }
    
    .btn-floating-action {
        display: block; text-align: center; background: #0056b3; color: #ffffff;
        padding: 14px 20px; border-radius: 30px; font-weight: 700; text-decoration: none;
        animation: floatingBtn 3s ease-in-out infinite; transition: background 0.3s ease;
    }
    .btn-floating-action:hover { background: #003d82; animation-play-state: paused; }
</style>

<div class="spec-detail-hero">
    <div class="container">
        <h1><?= htmlspecialchars($specialty->name); ?></h1>
    </div>
</div>

<div class="spec-detail-container">
    
    <!-- Bagian Kiri (Layanan) -->
    <div class="spec-main-content">
        <div class="spec-card-white">
            <div class="spec-icon-large">
                <!-- Gunakan field icon jika ada -->
                <i class="<?= !empty($specialty->icon) ? $specialty->icon : 'fas fa-briefcase-medical'; ?>"></i>
            </div>
            
            <h2 style="font-size:24px; font-weight:800; color:#2c3e50; margin-bottom: 20px;">Tentang Layanan Ini</h2>
            
            <div class="spec-body-text">
                <!-- Tampilkan deskripsi lengkap / konten HTML -->
                <?= !empty($specialty->content) ? $specialty->content : '<p>Informasi detail mengenai layanan ini belum ditambahkan.</p>'; ?>
            </div>
        </div>
        
        <a href="<?= site_url('specialties'); ?>" class="btn-back-spec">
            <i class="fas fa-arrow-left"></i> Kembali ke Layanan
        </a>
    </div>

    <!-- Bagian Kanan (Sidebar Janji Temu) -->
    <div class="spec-sidebar-content">
        <div class="spec-card-white sidebar-widget">
            <h3>Konsultasi Medis</h3>
            <p>Jadwalkan konsultasi dengan dokter spesialis kami untuk mendapatkan penanganan medis yang tepat dan akurat.</p>
            <a href="<?= site_url('schedule'); ?>" class="btn-floating-action">
                <i class="fas fa-calendar-check me-2"></i> Buat Janji Temu
            </a>
        </div>
    </div>
    
</div>
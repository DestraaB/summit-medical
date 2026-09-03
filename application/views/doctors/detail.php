<style>
    body { background-color: #f8fbfc; overflow-x: hidden; }

    /* --- Animasi Slide In & Float --- */
    @keyframes slideInLeft {
        0% { opacity: 0; transform: translateX(-50px); }
        100% { opacity: 1; transform: translateX(0); }
    }

    @keyframes slideInRight {
        0% { opacity: 0; transform: translateX(50px); }
        100% { opacity: 1; transform: translateX(0); }
    }

    @keyframes floatingButton {
        0% { transform: translateY(0); box-shadow: 0 5px 15px rgba(0,86,179,0.3); }
        50% { transform: translateY(-5px); box-shadow: 0 12px 25px rgba(0,86,179,0.4); }
        100% { transform: translateY(0); box-shadow: 0 5px 15px rgba(0,86,179,0.3); }
    }

    .doc-detail-hero {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        padding: 80px 20px 140px;
        border-radius: 0 0 50px 50px;
        margin-bottom: -80px;
        position: relative;
        z-index: 1;
    }

    .doc-detail-container {
        position: relative;
        z-index: 2;
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px 80px;
    }

    .doc-card-profile {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        display: flex;
        gap: 50px;
        align-items: center; /* Merapikan ke tengah secara vertikal */
        transition: box-shadow 0.4s ease;
    }
    
    .doc-card-profile:hover {
        box-shadow: 0 20px 60px rgba(0, 86, 179, 0.1);
    }

    @media (max-width: 768px) {
        .doc-card-profile { flex-direction: column; text-align: center; }
    }

    /* Foto meluncur dari Kiri */
    .doc-img-large {
        width: 320px;
        height: 380px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,86,179,0.15);
        flex-shrink: 0;
        opacity: 0;
        animation: slideInLeft 0.8s ease-out 0.2s forwards;
    }

    /* Info meluncur dari Kanan */
    .doc-info-full {
        opacity: 0;
        animation: slideInRight 0.8s ease-out 0.4s forwards;
    }

    .doc-info-full h1 { font-size: 36px; font-weight: 800; color: #2c3e50; margin-bottom: 10px; }
    
    .doc-specialty-badge {
        display: inline-block;
        background: #e0ebf5;
        color: #0056b3;
        padding: 8px 25px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 30px;
    }

    .doc-bio h4 {
        font-size: 18px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .doc-bio p { color: #5a6a7c; line-height: 1.8; font-size: 16px; margin-bottom: 30px; }

    /* Tombol Janji Temu dengan animasi melayang (floating) berulang */
    .btn-janji-temu {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #0056b3;
        color: #ffffff;
        padding: 15px 30px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        animation: floatingButton 3s ease-in-out infinite; /* Animasi terus menerus */
        transition: background 0.3s ease;
    }

    .btn-janji-temu:hover {
        background: #003d82;
        color: #ffffff;
        animation-play-state: paused; /* Berhenti melayang saat dihover */
    }

    /* Tombol Kembali dengan panah meluncur */
    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 30px;
        color: #0056b3;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-back i { transition: transform 0.3s ease; }
    .btn-back:hover i { transform: translateX(-8px); }
</style>

<div class="doc-detail-hero"></div>

<div class="doc-detail-container">
    <div class="doc-card-profile">
        
        <?php if (!empty($doctor->photo)): ?>
            <img src="<?= base_url('uploads/doctors/' . $doctor->photo); ?>" alt="<?= htmlspecialchars($doctor->name); ?>" class="doc-img-large">
        <?php else: ?>
            <img src="<?= base_url('assets/images/default-doctor.png'); ?>" alt="Default" class="doc-img-large">
        <?php endif; ?>

        <div class="doc-info-full">
            <h1><?= htmlspecialchars($doctor->name); ?></h1>
            <div class="doc-specialty-badge"><?= htmlspecialchars($doctor->specialty ?? 'Spesialis Umum'); ?></div>
            
            <div class="doc-bio">
                <h4><i class="fas fa-graduation-cap text-primary"></i> Latar Belakang</h4>
                <p><?= htmlspecialchars($doctor->biography ?? 'Dokter profesional yang berdedikasi tinggi dalam memberikan pelayanan medis terbaik dan berpengalaman dalam menangani berbagai keluhan pasien dengan pendekatan yang humanis.'); ?></p>
                
                <h4><i class="far fa-clock text-primary"></i> Jadwal Praktik</h4>
                <p>Senin - Kamis : 08.00 - 14.00 WIB<br>Sabtu : 09.00 - 12.00 WIB</p>
            </div>

            <a href="<?= site_url('schedule'); ?>" class="btn-janji-temu">
                <i class="fas fa-calendar-check"></i> Buat Janji Temu
            </a>
        </div>
    </div>

    <a href="<?= site_url('doctors'); ?>" class="btn-back">
        <i class="fas fa-arrow-left"></i> Kembali ke Direktori Dokter
    </a>
</div>
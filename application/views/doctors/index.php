<style>
    body { background-color: #f8fbfc; }

    /* --- Animasi Keyframes --- */
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes pulseSoft {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    /* --- Banner Hero --- */
    .doctors-hero {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        color: #ffffff;
        padding: 100px 20px 140px;
        border-radius: 0 0 50px 50px;
        text-align: center;
        margin-bottom: -80px;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 30px rgba(0, 86, 179, 0.2);
        animation: fadeInUp 0.8s ease-out; /* Animasi Hero */
    }

    .badge-doctors {
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

    .doctors-hero h1 { font-size: 42px; font-weight: 800; margin-bottom: 15px; }
    .doctors-hero p { font-size: 18px; color: #e0ebf5; max-width: 650px; margin: 0 auto; line-height: 1.6; }

    /* --- Container Grid Dokter --- */
    .doctors-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 80px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    /* --- Desain Kartu Dokter dengan Animasi --- */
    .doctor-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(0, 86, 179, 0.05);
        display: flex;
        flex-direction: column;
        opacity: 0; /* Dihide dulu untuk animasi */
        animation: fadeInUp 0.8s ease-out forwards; /* Forwards menjaga status akhir animasi */
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Efek membal saat di-hover */
    }

    .doctor-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(0, 86, 179, 0.15);
        border-color: #cce0f5;
    }

    /* --- Foto Dokter --- */
    .doctor-img-wrapper {
        width: 100%;
        height: 320px;
        overflow: hidden;
        background: #f0f6fc;
        position: relative;
    }

    .doctor-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
        transition: transform 0.6s ease;
    }

    .doctor-card:hover .doctor-img-wrapper img {
        transform: scale(1.08); /* Zoom halus pada foto */
    }

    /* --- Info Dokter --- */
    .doctor-info { padding: 30px 20px; display: flex; flex-direction: column; flex-grow: 1; }
    .doctor-name { font-size: 22px; font-weight: 800; color: #2c3e50; margin-bottom: 5px; }
    .doctor-specialty { font-size: 15px; color: #0056b3; font-weight: 700; margin-bottom: 20px; }

    /* --- Tombol Aksi (Smooth Hover) --- */
    .doctor-actions { display: flex; gap: 10px; margin-top: auto; }

    .btn-detail-doctor, .btn-book-doctor {
        flex: 1;
        font-weight: 700;
        font-size: 14px;
        padding: 10px 15px;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .btn-detail-doctor {
        background: #ffffff;
        color: #0056b3;
        border: 2px solid #0056b3;
    }

    .btn-book-doctor {
        background: #0056b3;
        color: #ffffff;
        border: 2px solid #0056b3;
    }

    .btn-detail-doctor:hover {
        background: #0056b3;
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,86,179,0.3);
    }

    .btn-book-doctor:hover {
        background: #003d82;
        border-color: #003d82;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,86,179,0.4);
    }
</style>

<div class="doctors-hero">
    <div class="container">
        <span class="badge-doctors">Direktori Medis</span>
        <h1>Tim Dokter Spesialis Kami</h1>
        <p>Summit Medical Center didukung oleh tenaga medis profesional dan berpengalaman.</p>
    </div>
</div>

<div class="doctors-container">
    <?php if (!empty($doctors)): ?>
        <?php 
            $delay = 0.2; // Variabel penentu jeda animasi
            foreach ($doctors as $doc): 
        ?>
            <!-- Memberikan jeda dinamis agar munculnya bergantian -->
            <div class="doctor-card" style="animation-delay: <?= $delay; ?>s;">
                <div class="doctor-img-wrapper">
                    <?php if (!empty($doc->photo)): ?>
                        <img src="<?= base_url('uploads/doctors/' . $doc->photo); ?>" alt="<?= htmlspecialchars($doc->name); ?>">
                    <?php else: ?>
                        <img src="<?= base_url('assets/images/default-doctor.png'); ?>" alt="Default Doctor">
                    <?php endif; ?>
                </div>

                <div class="doctor-info">
                    <h3 class="doctor-name"><?= htmlspecialchars($doc->name); ?></h3>
                    <br>
                    
                    <div class="doctor-actions">
                        <a href="<?= site_url('doctors/detail/' . $doc->id); ?>" class="btn-detail-doctor">
                            <i class="fas fa-user-md"></i> Profil
                        </a>
                        <a href="<?= site_url('contact'); ?>" class="btn-book-doctor">
                            <i class="far fa-calendar-check"></i> Janji
                        </a>
                    </div>
                </div>
            </div>
            <?php $delay += 0.15; // Jeda antar kartu 0.15 detik ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
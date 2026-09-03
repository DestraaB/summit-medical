<style>
    /* =========================================
       CSS DAFTAR SPESIALISASI (DENGAN ANIMASI)
    ========================================= */
    body { background-color: #f8fbfc; }

    /* --- Animasi Keyframes --- */
    @keyframes fadeInUpSpec {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* --- Banner Hero --- */
    .spec-hero {
        background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
        color: #ffffff;
        padding: 100px 20px 140px;
        border-radius: 0 0 50px 50px;
        text-align: center;
        margin-bottom: -80px;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 30px rgba(0, 86, 179, 0.2);
        animation: fadeInUpSpec 0.8s ease-out; /* Muncul dari bawah */
    }

    .badge-spec {
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

    .spec-hero h1 { font-size: 42px; font-weight: 800; margin-bottom: 15px; }
    .spec-hero p { font-size: 18px; color: #e0ebf5; max-width: 650px; margin: 0 auto; line-height: 1.6; }

    /* --- Container Grid Spesialisasi --- */
    .spec-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 80px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    /* --- Desain Kartu dengan Animasi Staggered --- */
    .spec-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(0, 86, 179, 0.05);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        
        /* Persiapan Animasi */
        opacity: 0; 
        animation: fadeInUpSpec 0.8s ease-out forwards;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .spec-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(0, 86, 179, 0.12);
        border-color: #cce0f5;
    }

    /* --- Icon Spesialisasi --- */
    .spec-icon-wrapper {
        width: 80px;
        height: 80px;
        background: #f0f6fc;
        color: #0056b3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin-bottom: 25px;
        transition: all 0.4s ease;
    }

    .spec-card:hover .spec-icon-wrapper {
        background: #0056b3;
        color: #ffffff;
        transform: scale(1.1) rotate(5deg);
    }

    .spec-title { font-size: 22px; font-weight: 800; color: #2c3e50; margin-bottom: 15px; transition: color 0.3s; }
    .spec-card:hover .spec-title { color: #0056b3; }
    
    .spec-desc { color: #6c757d; font-size: 15px; line-height: 1.6; margin-bottom: 25px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

    .spec-link {
        color: #0056b3;
        font-weight: 700;
        font-size: 15px;
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }
    .spec-card:hover .spec-link { gap: 12px; }
</style>

<div class="spec-hero">
    <div class="container">
        <span class="badge-spec">Pusat Layanan Medis</span>
        <h1>Layanan Spesialisasi Kami</h1>
        <p>Solusi medis komprehensif dengan fasilitas modern dan tim spesialis yang berdedikasi untuk kesembuhan Anda.</p>
    </div>
</div>

<div class="spec-container">
    <?php if (!empty($specialties)): ?>
        <?php 
            $delay = 0.2; // Jeda animasi
            foreach ($specialties as $spec): 
        ?>
            <!-- Kartu meluncur satu per satu -->
            <a href="<?= site_url('specialties/detail/' . $spec->id); ?>" class="spec-card" style="animation-delay: <?= $delay; ?>s;">
                
                <div class="spec-icon-wrapper">
                    <!-- Jika ada field icon (ex: fas fa-heartbeat), tampilkan. Jika tidak, pakai icon default -->
                    <i class="<?= !empty($spec->icon) ? $spec->icon : 'fas fa-stethoscope'; ?>"></i>
                </div>
                
                <h3 class="spec-title"><?= htmlspecialchars($spec->name); ?></h3>
                
                <p class="spec-desc">
                    <?= htmlspecialchars($spec->description ?? 'Layanan medis profesional oleh tim dokter berpengalaman.'); ?>
                </p>

                <span class="spec-link">
                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                </span>
            </a>
            <?php $delay += 0.15; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px; background: #fff; border-radius: 20px; border: 2px dashed #cce0f5;">
            <h4 class="text-muted">Data layanan spesialisasi belum tersedia.</h4>
        </div>
    <?php endif; ?>
</div>
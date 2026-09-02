<style>
    /* =========================================
       CSS HALAMAN DIREKTORI DOKTER
    ========================================= */
    body {
        background-color: #f8fbfc;
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

    .doctors-hero h1 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .doctors-hero p {
        font-size: 18px;
        color: #e0ebf5;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.6;
    }

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

    /* --- Desain Kartu Dokter --- */
    .doctor-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        border: 1px solid rgba(0, 86, 179, 0.05);
        display: flex;
        flex-direction: column;
    }

    .doctor-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 86, 179, 0.12);
        border-color: #cce0f5;
    }

    /* --- Foto Dokter --- */
    .doctor-img-wrapper {
        width: 100%;
        height: 320px; /* Ukuran pas untuk foto potret */
        overflow: hidden;
        background: #f0f6fc;
        position: relative;
    }

    .doctor-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
        transition: transform 0.5s ease;
    }

    .doctor-card:hover .doctor-img-wrapper img {
        transform: scale(1.05);
    }

    /* --- Info Dokter --- */
    .doctor-info {
        padding: 30px 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .doctor-name {
        font-size: 22px;
        font-weight: 800;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .doctor-specialty {
        font-size: 15px;
        color: #0056b3;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* --- Tombol Aksi --- */
    .btn-book-doctor {
        margin-top: auto;
        background: #f0f6fc;
        color: #0056b3;
        font-weight: 700;
        padding: 12px 20px;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .doctor-card:hover .btn-book-doctor {
        background: #0056b3;
        color: #ffffff;
    }
    /* --- Tombol Aksi Dokter (Update) --- */
    .doctor-actions {
        margin-top: auto;
        display: flex;
        gap: 10px;
    }

    .btn-detail-doctor {
        flex: 1;
        background: #ffffff;
        color: #0056b3;
        border: 2px solid #0056b3;
        font-weight: 700;
        font-size: 14px;
        padding: 10px 15px;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-detail-doctor:hover {
        background: #0056b3;
        color: #ffffff;
    }

    .btn-book-doctor {
        flex: 1;
        background: #0056b3;
        color: #ffffff;
        border: 2px solid #0056b3;
        font-weight: 700;
        font-size: 14px;
        padding: 10px 15px;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-book-doctor:hover {
        background: #003d82;
        border-color: #003d82;
    }

</style>

<!-- --- HTML Struktur Halaman Direktori Dokter --- -->
<div class="doctors-hero">
    <div class="container">
        <span class="badge-doctors">Direktori Medis</span>
        <h1>Tim Dokter Spesialis Kami</h1>
        <p>Summit Medical Center didukung oleh tenaga medis profesional, berpengalaman, dan berdedikasi tinggi untuk memberikan pelayanan kesehatan terbaik bagi Anda.</p>
    </div>
</div>

<div class="doctors-container">
    <?php if (!empty($doctors)): ?>
        <?php foreach ($doctors as $doc): ?>
            <div class="doctor-card">
                
                <!-- Foto Dokter -->
                <div class="doctor-img-wrapper">
                    <?php if (!empty($doc->photo)): ?>
                        <!-- Sesuaikan field photo dengan nama kolom di database Anda -->
                        <img src="<?= base_url('uploads/doctors/' . $doc->photo); ?>" alt="<?= htmlspecialchars($doc->name); ?>">
                    <?php else: ?>
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=400&q=80" alt="Default Doctor">
                    <?php endif; ?>
                </div>

                <!-- Informasi Dokter -->
                <div class="doctor-info">
                    <h3 class="doctor-name"><?= htmlspecialchars($doc->name); ?></h3>
                    
                    <!-- Sesuaikan field specialty/education dengan nama kolom di database Anda -->
                    <p class="doctor-specialty"><?= htmlspecialchars($doc->specialty ?? 'Dokter Spesialis'); ?></p>
                    
                    <!-- Mengarahkan ke halaman schedule -->
                    <a href="<?= site_url('schedule'); ?>" class="btn-book-doctor">
                        <i class="far fa-calendar-check me-2"></i> Buat Janji Temu
                    </a>
                </div>

            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: #fff; border-radius: 20px; border: 2px dashed #cce0f5;">
            <i class="fas fa-user-md fa-4x text-muted mb-3" style="opacity: 0.3;"></i>
            <h4 class="text-muted">Data dokter belum tersedia.</h4>
        </div>
    <?php endif; ?>
</div>
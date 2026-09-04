<!-- =========================================================
     SUMMIT MEDICAL CENTER
     HOME / INDEX
     ========================================================= -->

<!-- TAMBAHAN CSS: Animasi Halus & Perbaikan Layout -->
<style>
    .hover-card, .btn, .hover-link {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .hover-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 70, 184, 0.1) !important;
        border-color: #dceaff !important;
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 70, 184, 0.2);
    }
    @keyframes floatingBadge {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); box-shadow: 0 15px 25px rgba(0,0,0,0.1); }
    }
    .floating-badge {
        animation: floatingBadge 4s ease-in-out infinite;
    }
    .img-zoom-wrapper {
        overflow: hidden;
        border-radius: 25px;
    }
    .img-zoom {
        transition: transform 0.6s ease;
    }
    .img-zoom-wrapper:hover .img-zoom {
        transform: scale(1.05);
    }
</style>

<!-- =========================
     HERO SECTION
     ========================= -->
<section class="container py-4 py-lg-5 overflow-hidden">
    <div class="row align-items-center g-4">

        <!-- HERO CONTENT -->
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
            <div class="mb-3">
                <span class="badge rounded-pill px-3 py-2"
                    style="background-color: #eaf2ff; color: #0046b8; font-weight: 600;">
                    <i class="fas fa-hospital me-2"></i>
                    Summit Medical Center
                </span>
            </div>

            <h1 class="fw-bold mb-4"
                style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.08; letter-spacing: -2px; color: #102a43;">
                Pelayanan Kesehatan
                <span style="color: #0046b8;">Terpercaya</span>
                untuk Anda.
            </h1>

            <p class="text-muted mb-4"
                style="font-size: 1.08rem; line-height: 1.8; max-width: 570px;">
                Kami hadir memberikan pelayanan kesehatan yang profesional,
                aman, nyaman, dan berorientasi pada kebutuhan setiap pasien.
            </p>
    
            <div class="d-flex flex-wrap gap-2">
                <a href="<?= base_url('contact'); ?>"
                   class="btn text-white rounded-pill px-4 py-3"
                   style="background-color: #0046b8;">
                    <i class="fas fa-calendar-check me-2"></i> Buat Janji
                </a>
                <a href="<?= base_url('doctors'); ?>"
                   class="btn btn-outline-primary rounded-pill px-4 py-3">
                    <i class="fas fa-user-md me-2"></i> Lihat Dokter
                </a>
            </div>
        </div>

        <!-- HERO IMAGE -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
            <div class="position-relative img-zoom-wrapper shadow-sm">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1000&q=80"
                     alt="Summit Medical Center"
                     class="img-fluid w-100 img-zoom"
                     style="height: 520px; object-fit: cover;">

                <div class="position-absolute bg-white shadow-lg p-3 p-md-4 floating-badge"
                     style="left: -20px; bottom: 35px; border-radius: 18px; max-width: 260px; z-index: 2;">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center me-3"
                             style="width: 50px; height: 50px; border-radius: 14px; background-color: #eaf2ff; color: #0046b8;">
                            <i class="fas fa-heartbeat fa-lg"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Pelayanan</small>
                            <strong>Profesional & Terpercaya</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- =========================
     QUICK ACCESS
     ========================= -->
<section class="container py-4">
    <div class="row g-3">
        <?php 
        $quick_menus = [
            ['url' => 'doctors', 'icon' => 'fa-user-md', 'title' => 'Dokter', 'desc' => 'Temukan dokter dan jadwal.'],
            ['url' => 'services', 'icon' => 'fa-stethoscope', 'title' => 'Layanan', 'desc' => 'Beragam layanan kesehatan.'],
            ['url' => 'facilities', 'icon' => 'fa-hospital-alt', 'title' => 'Fasilitas', 'desc' => 'Fasilitas modern & nyaman.'],
            ['url' => 'contact', 'icon' => 'fa-phone-alt', 'title' => 'Hubungi Kami', 'desc' => 'Informasi & Bantuan Cepat.']
        ];
        foreach ($quick_menus as $index => $menu): 
        ?>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <a href="<?= base_url($menu['url']); ?>" class="text-decoration-none">
                <div class="p-4 h-100 bg-white hover-card"
                     style="border-radius: 18px; border: 1px solid #eef2f7;">
                    <i class="fas <?= $menu['icon']; ?> fa-2x mb-3" style="color: #0046b8;"></i>
                    <h5 class="fw-bold text-dark"><?= $menu['title']; ?></h5>
                    <p class="text-muted small mb-0"><?= $menu['desc']; ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- =========================
     ABOUT SECTION
     ========================= -->
<section class="container py-5 mt-4 overflow-hidden">
    <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
            <div class="position-relative img-zoom-wrapper shadow-sm">
                <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=900&q=80"
                     alt="Pelayanan Summit Medical Center"
                     class="img-fluid w-100 img-zoom"
                     style="height: 430px; object-fit: cover;">

                <div class="position-absolute bg-white shadow p-3 floating-badge"
                     style="right: 20px; bottom: -20px; border-radius: 16px; animation-delay: 1s;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-shield-alt fa-2x me-3" style="color: #0046b8;"></i>
                        <div>
                            <strong class="d-block">Aman & Terpercaya</strong>
                            <small class="text-muted">Mengutamakan keselamatan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color: #eaf2ff; color: #0046b8;">
                <i class="fas fa-asterisk me-2"></i> Tentang Kami
            </span>
            <h2 class="fw-bold mb-4" style="font-size: 2.7rem; line-height: 1.15; color: #102a43;">
                Kesehatan Anda adalah <span style="color:#0046b8;">prioritas kami.</span>
            </h2>
            <p class="text-muted" style="line-height: 1.8;">
                Summit Medical Center berkomitmen menghadirkan pelayanan
                kesehatan yang berkualitas dengan dukungan tenaga medis
                profesional, fasilitas yang memadai, serta lingkungan yang
                nyaman bagi pasien dan keluarga.
            </p>
            <p class="text-muted mb-4" style="line-height: 1.8;">
                Kami terus berkembang untuk memberikan pengalaman pelayanan
                kesehatan yang lebih baik bagi masyarakat.
            </p>
            <a href="<?= base_url('about'); ?>" class="btn text-white rounded-pill px-4 py-3" style="background-color:#0046b8;">
                Tentang Rumah Sakit <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- =========================
     SERVICES SECTION
     ========================= -->
<section class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4" data-aos="fade-up">
        <div>
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color: #eaf2ff; color: #0046b8;">
                <i class="fas fa-asterisk me-2"></i> Layanan Kami
            </span>
            <h2 class="fw-bold mb-2" style="font-size: 2.6rem; color:#102a43;">
                Layanan Kesehatan <br>
                <span style="color:#0046b8;">untuk Kebutuhan Anda</span>
            </h2>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="<?= base_url('services'); ?>" class="btn btn-outline-primary rounded-pill px-4 py-2">
                Lihat Semua Layanan <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

    <div class="row g-4">
        <?php if (!empty($services)) : ?>
            <?php foreach (array_slice($services, 0, 6) as $index => $service) : ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $index * 100; ?>">
                    <a href="<?= base_url('services/detail/' . $service->id); ?>" class="text-decoration-none">
                        <div class="h-100 p-4 bg-white hover-card" style="border-radius: 20px; border: 1px solid #edf1f7;">
                            <div class="d-flex align-items-center justify-content-center mb-4"
                                 style="width: 60px; height: 60px; border-radius: 16px; background-color:#eaf2ff; color:#0046b8;">
                                <i class="<?= !empty($service->icon) ? htmlspecialchars($service->icon) : 'fas fa-stethoscope'; ?> fa-lg"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-3"><?= htmlspecialchars($service->name); ?></h4>
                            <p class="text-muted mb-3" style="font-size:.92rem; line-height:1.7;">
                                <?= substr(htmlspecialchars(strip_tags($service->description ?? '')), 0, 110); ?>...
                            </p>
                            <span style="color:#0046b8; font-weight:600;">
                                Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </span>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center py-5">
                <i class="fas fa-info-circle fa-2x text-muted mb-3"></i>
                <p class="text-muted mb-0">Belum ada layanan yang tersedia.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- =========================
     WHY US
     ========================= -->
<section class="container py-5">
    <div class="p-4 p-md-5 hover-card" style="background-color:#f5f8fc; border-radius:30px; border: 1px solid #edf1f7;">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color:#dceaff; color:#0046b8;">
                    <i class="fas fa-star me-2"></i> Mengapa Kami
                </span>
                <h2 class="fw-bold mb-3" style="font-size:2.5rem; color:#102a43;">
                    Pelayanan yang <br><span style="color:#0046b8;">mengutamakan Anda.</span>
                </h2>
                <p class="text-muted" style="line-height:1.8;">
                    Kami menggabungkan tenaga profesional, pelayanan berempati, dan fasilitas yang mendukung untuk menciptakan pengalaman kesehatan yang lebih baik.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <?php 
                    $reasons = [
                        ['icon' => 'fa-user-md', 'title' => 'Tenaga Profesional', 'desc' => 'Didukung tenaga medis yang kompeten.'],
                        ['icon' => 'fa-heartbeat', 'title' => 'Berorientasi Pasien', 'desc' => 'Fokus pada kebutuhan pasien.'],
                        ['icon' => 'fa-hospital', 'title' => 'Fasilitas Memadai', 'desc' => 'Infrastruktur kesehatan lengkap.'],
                        ['icon' => 'fa-shield-alt', 'title' => 'Aman & Nyaman', 'desc' => 'Lingkungan bersih dan bersahabat.']
                    ];
                    foreach($reasons as $idx => $r):
                    ?>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $idx * 100 ?>">
                        <div class="bg-white p-4 h-100 hover-card" style="border-radius:18px; box-shadow:0 5px 20px rgba(0,0,0,.03);">
                            <i class="fas <?= $r['icon']; ?> fa-2x mb-3" style="color:#0046b8;"></i>
                            <h5 class="fw-bold"><?= $r['title']; ?></h5>
                            <p class="text-muted small mb-0"><?= $r['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
     FACILITY SHOWCASE
     ========================= -->
<section class="container py-5 overflow-hidden">
    <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
            <div class="img-zoom-wrapper shadow-sm">
                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1000&q=80"
                     alt="Fasilitas Rumah Sakit"
                     class="img-fluid w-100 img-zoom"
                     style="height:420px; object-fit:cover;">
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color:#eaf2ff; color:#0046b8;">
                <i class="fas fa-hospital-alt me-2"></i> Fasilitas
            </span>
            <h2 class="fw-bold mb-4" style="font-size:2.6rem; line-height:1.15; color:#102a43;">
                Lingkungan nyaman untuk mendukung <span style="color:#0046b8;">proses pemulihan.</span>
            </h2>
            <p class="text-muted mb-4" style="line-height:1.8;">
                Kami menyediakan fasilitas yang dirancang untuk memberikan kenyamanan dan mendukung kebutuhan pelayanan kesehatan pasien.
            </p>
            <div class="mb-3">
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-check-circle me-3" style="color:#0046b8;"></i>
                    <span>Lingkungan rumah sakit yang nyaman</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-check-circle me-3" style="color:#0046b8;"></i>
                    <span>Fasilitas pelayanan yang memadai</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle me-3" style="color:#0046b8;"></i>
                    <span>Mendukung kebutuhan pasien dan keluarga</span>
                </div>
            </div>
            <a href="<?= base_url('facilities'); ?>" class="btn text-white rounded-pill px-4 py-3 mt-3" style="background-color:#0046b8;">
                Lihat Semua Fasilitas <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- =========================
     NEWS / ARTIKEL TERBARU
     ========================= -->
<section class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4" data-aos="fade-up">
        <div>
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color:#eaf2ff; color:#0046b8;">
                <i class="fas fa-newspaper me-2"></i> Berita & Edukasi
            </span>
            <h2 class="fw-bold mb-0" style="font-size:2.5rem; color:#102a43;">
                Informasi Kesehatan <span style="color:#0046b8;">Terkini</span>
            </h2>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="<?= base_url('news'); ?>" class="btn btn-outline-primary rounded-pill px-4 py-2">
                Semua Artikel <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12">
           <a href="<?= base_url('news/detail/pentingnya-deteksi-dini-risiko-penyakit-jantung-koroner-melalui-medical-check-up-rutin'); ?>" class="text-decoration-none text-dark">
                <div class="bg-white hover-card overflow-hidden shadow-sm" style="border-radius:25px; border: 1px solid #edf1f7;">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <!-- Gambar relevan: Konsultasi medis / pemeriksaan jantung -->
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=800&q=80" 
                                 alt="Berita Kesehatan Jantung" class="img-fluid w-100" style="height: 100%; min-height: 280px; object-fit: cover;">
                        </div>
                        <div class="col-md-7 p-4 p-lg-5">
                            <div class="mb-3">
                                <span class="badge bg-primary text-white me-2">Jantung & Pembuluh Darah</span>
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> <?= date('d M Y', strtotime('-2 days')); ?></small>
                            </div>
                            <h3 class="fw-bold mb-3" style="color:#102a43;">Pentingnya Deteksi Dini Risiko Penyakit Jantung Koroner Melalui Medical Check-Up Rutin</h3>
                            <p class="text-muted mb-4" style="line-height:1.7;">
                                Penyakit Jantung Koroner (PJK) seringkali dijuluki sebagai silent killer karena gejalanya kerap tidak disadari hingga mencapai tahap yang serius. Padahal, sebagian besar kasus serangan jantung dapat dicegah...
                            </p>
                            <span class="text-primary fw-bold" style="font-size: 1.05rem;">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- =========================
     DOCTOR CTA / CARI DOKTER
     ========================= -->
<section class="container py-5">
    <div class="row align-items-center g-4 hover-card"
         style="background-color:#0046b8; border-radius:30px; padding:45px;">
        <div class="col-lg-8" data-aos="fade-right">
            <span class="badge rounded-pill border border-light text-white px-3 py-2 mb-3">
                <i class="fas fa-user-md me-2"></i> Tim Medis Kami
            </span>
            <h2 class="text-white fw-bold mb-3" style="font-size:2.5rem; line-height:1.2;">
                Temukan dokter yang sesuai dengan kebutuhan Anda.
            </h2>
            <p class="text-white mb-0" style="opacity:.9; max-width:650px;">
                Lihat daftar dokter dan temukan informasi mengenai tenaga medis serta jadwal praktik yang tersedia di Summit Medical Center.
            </p>
        </div>
    </div>
</section>

<!-- =========================
     PARTNERS
     ========================= -->
<section class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color:#eaf2ff; color:#0046b8;">
            <i class="fas fa-handshake me-2"></i> Mitra Kami
        </span>
        <h2 class="fw-bold" style="font-size:2.5rem; color:#102a43;">
            Bersama membangun <span style="color:#0046b8;">kesehatan yang lebih baik.</span>
        </h2>
        <p class="text-muted">Kami terbuka untuk membangun kerja sama yang memberikan manfaat bagi masyarakat.</p>
    </div>

    <div class="row g-3 justify-content-center">
        <?php 
        $partners = ['Asuransi', 'BPJS Kesehatan', 'Mandiri Inhealth', 'KAI Medika', 'Takaful'];
        $icons = ['fa-shield-alt', 'fa-heartbeat', 'fa-building', 'fa-train', 'fa-hands-helping'];
        foreach($partners as $idx => $p):
        ?>
        <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="<?= $idx * 100 ?>">
            <div class="bg-white border hover-card p-4 text-center h-100" style="border-radius:20px;">
                <i class="fas <?= $icons[$idx]; ?> fa-2x mb-2" style="color:#0046b8;"></i>
                <small class="fw-bold d-block text-dark"><?= $p; ?></small>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- =========================
     FINAL CTA
     ========================= -->
<section class="container py-5 mb-5">
    <div class="text-center p-5 hover-card shadow-sm" data-aos="zoom-in"
         style="background: linear-gradient(135deg, #003b9f 0%, #005bd4 100%); border-radius:30px;">
        <div class="mb-3">
            <i class="fas fa-heartbeat fa-3x text-white floating-badge"></i>
        </div>
        <h2 class="text-white fw-bold mb-3" style="font-size:2.7rem; line-height:1.2;">
            Saatnya menjaga kesehatan Anda dan keluarga.
        </h2>
        <p class="text-white mb-4" style="opacity:.9; max-width:650px; margin: 0 auto; line-height:1.7;">
            Dapatkan pelayanan kesehatan yang profesional, nyaman, dan terpercaya bersama Summit Medical Center.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="<?= base_url('contact'); ?>" class="btn btn-light text-primary rounded-pill px-4 py-3 fw-bold">
                <i class="fas fa-calendar-check me-2"></i> Buat Janji Sekarang
            </a>
            <a href="<?= base_url('services'); ?>" class="btn btn-outline-light rounded-pill px-4 py-3">
                Lihat Layanan <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
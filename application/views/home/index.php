<!-- HERO SECTION -->
<div class="container my-4" data-aos="fade-down" data-aos-duration="1000">
    <div class="row g-4 align-items-stretch">
        <div class="col-lg-6">
            <div class="p-5 d-flex flex-column justify-content-center h-100" style="background-color: #0046b8; border-radius: 1.5rem;">
                <h1 class="text-white fw-bold mb-4" style="font-size: 3.5rem; line-height: 1.1; letter-spacing: -1px;">
                    Temukan<br>pelayanan medis<br>terbaik
                </h1>
                <p class="text-white mb-5" style="font-size: 1.05rem; opacity: 0.95;">
                    Dapatkan perawatan terbaik dari dokter ahli dan teknologi kesehatan terkini di rumah sakit kami.
                </p>
                <form action="<?= base_url('doctors'); ?>" method="get" class="mb-4">
                    <input type="text" name="keyword" class="form-control form-control-lg border-0 shadow-none px-4" placeholder="Cari dokter...." style="border-radius: 2rem; padding: 0.8rem 1.5rem; font-size: 1rem;">
                </form>
                <div class="d-flex flex-wrap gap-2">
                    <a href="<?= base_url('contact'); ?>" class="btn btn-outline-light px-4 py-2" style="border-radius: 2rem; font-weight: 500; font-width: 1.5px;">Pendaftaran Pasien</a>
                    <a href="<?= base_url('doctors'); ?>" class="btn btn-outline-light px-4 py-2" style="border-radius: 2rem; font-weight: 500; border-width: 1.5px;">Jadwal Dokter</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex flex-column h-100 gap-3">
                <div class="flex-grow-1" style="min-height: 320px;">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Gedung Rumah Sakit" class="img-fluid w-100 h-100" style="object-fit: cover; border-radius: 1.5rem;">
                </div>
                <div class="row g-3">
                    <div class="col-4">
                        <div class="text-white p-3 d-flex flex-column justify-content-center h-100" style="background-color: #0046b8; border-radius: 1rem;">
                            <h3 class="fw-bold mb-0" style="font-size: 1.8rem;">80+</h3>
                            <small style="font-size: 0.75rem; opacity: 0.9;">Dokter Spesialis</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-white p-3 d-flex flex-column justify-content-center h-100" style="background-color: #0046b8; border-radius: 1rem;">
                            <h3 class="fw-bold mb-0" style="font-size: 1.8rem;">800+</h3>
                            <small style="font-size: 0.75rem; opacity: 0.9; line-height: 1.2;">Tenaga Profesional</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-white p-3 d-flex flex-column justify-content-center h-100" style="background-color: #0046b8; border-radius: 1rem;">
                            <h3 class="fw-bold mb-0" style="font-size: 1.8rem;">15K+</h3>
                            <small style="font-size: 0.75rem; opacity: 0.9;">Kunjungan/Bulan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION: MITRA KAMI -->
<div class="container mt-5 pt-4" data-aos="fade-up">
    <div class="mb-2"><span class="badge rounded-pill text-white" style="background-color: #0046b8; padding: 0.5rem 1rem;"><i class="fas fa-asterisk me-2"></i>Mitra Kami</span></div>
    <h2 class="fw-bold mb-3" style="font-size: 2.5rem; letter-spacing: -0.5px;">Bersinergi untuk Mewujudkan<br>Kesehatan Berkemajuan</h2>
    <p class="text-muted mb-5">Kami terbuka untuk kemitraan baru yang berfokus pada peningkatan kualitas kesehatan.</p>
    
    <div class="d-flex flex-wrap justify-content-between align-items-center opacity-75 gap-4">
        <!-- Tempatkan logo mitra asli Anda di sini. Gunakan teks/ikon fontawesome sebagai placeholder sementara -->
        <h4 class="fw-bold mb-0 partner-logo"><i class="fas fa-shield-alt me-2"></i>Asuransi A</h4>
        <h4 class="fw-bold mb-0 partner-logo"><i class="fas fa-heartbeat me-2"></i>BPJS Kesehatan</h4>
<!-- Lakukan untuk semua mitra -->
        <h4 class="text-muted fw-bold mb-0"><i class="fas fa-building me-2"></i>Mandiri Inhealth</h4>
        <h4 class="text-muted fw-bold mb-0"><i class="fas fa-train me-2"></i>KAI Medika</h4>
        <h4 class="text-muted fw-bold mb-0"><i class="fas fa-hands-helping me-2"></i>Takaful</h4>
    </div>
</div>

<!-- SECTION: LAYANAN UNGGULAN -->
<div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between align-items-end mb-4" data-aos="fade-right">
        <div>
            <div class="mb-2"><span class="badge rounded-pill text-white" style="background-color: #0046b8; padding: 0.5rem 1rem;"><i class="fas fa-asterisk me-2"></i>Layanan Unggulan</span></div>
            <h2 class="fw-bold mb-0" style="font-size: 2.5rem; letter-spacing: -0.5px;">Layanan Kesehatan<br>Andalan Kami</h2>
        </div>
        <div class="d-none d-md-block text-end" style="max-width: 400px;">
            <p class="text-muted small mb-3">Berbagai layanan unggulan dirancang khusus untuk memberikan solusi kesehatan yang tepat, aman, dan nyaman.</p>
            <a href="<?= base_url('services'); ?>" class="btn text-white rounded-pill px-4" style="background-color: #0046b8;">Pelajari Selengkapnya</a>
        </div>
    </div>
    
    <div class="row g-4">
        <?php if (!empty($services)) : ?>
            <?php foreach (array_slice($services, 0, 6) as $index => $service) : ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= $index * 100; ?>">
                    <a href="<?= base_url('services/detail/' . $service->id); ?>" class="text-decoration-none">
                        <div class="service-card-blue p-4">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-star text-white"></i>
                            </div>
                            <h4 class="fw-bold mb-3"><?= htmlspecialchars($service->name); ?></h4>
                            <p class="mb-0" style="font-size: 0.9rem; opacity: 0.85;">
                                <?= substr(htmlspecialchars($service->description), 0, 90); ?>...
                            </p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- SECTION: SHOWCASE ALTERNATING -->
<div class="container mt-5 pt-5 overflow-hidden">
    <!-- Showcase 1 -->
    <div class="row align-items-center mb-5 pb-4">
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
            <div class="mb-3"><span class="badge rounded-pill text-white" style="background-color: #0046b8; padding: 0.5rem 1rem;"><i class="fas fa-asterisk me-2"></i>Layanan Penunjang</span></div>
            <h2 class="fw-bold mb-3" style="font-size: 2.2rem; line-height: 1.2;">Pelayanan Profesional<br>Berlandaskan Nilai Islami</h2>
            <p class="text-muted mb-4">Kami berkomitmen memberikan pelayanan kesehatan terbaik dengan mengutamakan nilai-nilai kemanusiaan dan spiritual.</p>
            <a href="<?= base_url('about'); ?>" class="btn text-white rounded-pill px-4" style="background-color: #0046b8;">Pelajari Selengkapnya</a>
        </div>
        <div class="img-zoom-wrapper" data-aos="fade-left">
            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Pelayanan" class="img-fluid" style="border-radius: 1.5rem; object-fit: cover; height: 350px; width: 100%;">
        </div>
    </div>

    <!-- Showcase 2 -->
    <div class="row align-items-center flex-row-reverse mb-5">
        <div class="col-md-6 mb-4 mb-md-0 ps-md-5" data-aos="fade-left">
            <div class="mb-3"><span class="badge rounded-pill text-white" style="background-color: #0046b8; padding: 0.5rem 1rem;"><i class="fas fa-asterisk me-2"></i>Layanan Rawat Inap</span></div>
            <h2 class="fw-bold mb-3" style="font-size: 2.2rem; line-height: 1.2;">Prioritas Kami:<br>Nyaman & Terjangkau</h2>
            <p class="text-muted mb-4">Kami memberikan fasilitas rawat inap yang terbaik dan dapat memenuhi kebutuhan untuk pemulihan pasien.</p>
            <a href="<?= base_url('facilities'); ?>" class="btn text-white rounded-pill px-4" style="background-color: #0046b8;">Pelajari Selengkapnya</a>
        </div>
        <div class="img-zoom-wrapper" data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Kamar Pasien" class="img-fluid" style="border-radius: 1.5rem; object-fit: cover; height: 350px; width: 100%;">
        </div>
    </div>
</div>

<!-- SECTION: CTA BOX (Call to Action) -->
<div class="container my-5 pb-5" data-aos="zoom-in" data-aos-duration="1000">
    <div class="row align-items-center p-4 p-md-5" style="background-color: #0046b8; border-radius: 1.5rem;">
        <div class="col-md-6 text-white mb-4 mb-md-0 pe-md-5">
            <div class="mb-3"><span class="badge rounded-pill border border-light text-white" style="padding: 0.5rem 1rem;"><i class="fas fa-asterisk me-2"></i>Sehat Bersama Kami</span></div>
            <h2 class="fw-bold mb-3" style="font-size: 2.5rem; line-height: 1.2;">Mitra Tepercaya untuk<br>Kesehatan Anda.</h2>
            <p class="mb-4" style="opacity: 0.9; font-size: 1.05rem;">Didukung tenaga medis profesional, pelayanan berempati, dan fasilitas lengkap yang terus berkembang sesuai kebutuhan pasien.</p>
            <a href="<?= base_url('contact'); ?>" class="btn btn-light text-primary rounded-pill px-4 py-2 fw-bold">Buat Janji Sekarang</a>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1551076805-e18690c5e53b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Resepsionis" class="img-fluid shadow" style="border-radius: 1rem; object-fit: cover; height: 320px; width: 100%;">
        </div>
    </div>
</div>
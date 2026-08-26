<div class="container my-4">
    <div class="row g-4 align-items-stretch">
        
        <!-- KOLOM KIRI (Kotak Biru) -->
        <div class="col-lg-6">
            <div class="p-5 d-flex flex-column justify-content-center h-100" style="background-color: #0046b8; border-radius: 1.5rem;">
                <h1 class="text-white fw-bold mb-4" style="font-size: 3.5rem; line-height: 1.1; letter-spacing: -1px;">
                    Temukan<br>pelayanan medis<br>terbaik
                </h1>
                
                <p class="text-white mb-5" style="font-size: 1.05rem; opacity: 0.95; max-width: 90%;">
                    Dapatkan perawatan terbaik dari dokter ahli dan teknologi kesehatan terkini di rumah sakit kami.
                </p>
                
                <!-- Kotak Pencarian Dokter -->
                <form action="<?= base_url('doctors'); ?>" method="get" class="mb-4">
                    <input type="text" name="keyword" class="form-control form-control-lg border-0 shadow-none px-4" placeholder="Cari dokter...." style="border-radius: 2rem; padding-top: 0.8rem; padding-bottom: 0.8rem; font-size: 1rem;">
                </form>

                <!-- Tombol Aksi -->
                <div class="d-flex flex-wrap gap-2">
                    <a href="#" class="btn btn-outline-light px-4 py-2" style="border-radius: 2rem; font-weight: 500; font-size: 0.9rem; border-width: 1.5px;">Pendaftaran Pasien</a>
                    <a href="<?= base_url('doctors'); ?>" class="btn btn-outline-light px-4 py-2" style="border-radius: 2rem; font-weight: 500; font-size: 0.9rem; border-width: 1.5px;">Jadwal Dokter</a>
                    <a href="<?= base_url('contact'); ?>" class="btn btn-outline-light px-4 py-2" style="border-radius: 2rem; font-weight: 500; font-size: 0.9rem; border-width: 1.5px;">Hubungi Kami</a>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN (Gambar & Statistik) -->
        <div class="col-lg-6">
            <div class="d-flex flex-column h-100 gap-3">
                <!-- Gambar Gedung -->
                <div class="flex-grow-1" style="min-height: 320px;">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Gedung Rumah Sakit" class="img-fluid w-100 h-100" style="object-fit: cover; border-radius: 1.5rem;">
                </div>
                
                <!-- 3 Kotak Statistik -->
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
                            <small style="font-size: 0.75rem; opacity: 0.9; line-height: 1.2;">Tenaga Kesehatan Profesional</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-white p-3 d-flex flex-column justify-content-center h-100" style="background-color: #0046b8; border-radius: 1rem;">
                            <h3 class="fw-bold mb-0" style="font-size: 1.8rem;">15K+</h3>
                            <small style="font-size: 0.75rem; opacity: 0.9;">Kunjungan Per Bulan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ==============================================
     BAGIAN KONTEN DINAMIS (TETAP DIPERTAHANKAN)
     ============================================== -->
<div class="container mt-5">
    
    <!-- Layanan -->
    <div class="row mb-5 text-center">
        <div class="col-12 mb-4">
            <h2 class="section-title fw-bold">Layanan Unggulan</h2>
            <p class="text-muted">Dedikasi kami untuk memberikan layanan medis terbaik sesuai standar operasional.</p>
        </div>
        
        <?php if (!empty($services)) : ?>
            <?php foreach ($services as $service) : ?>
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm bg-white h-100" style="border-radius: 1rem !important;">
                        <div class="text-primary mb-3">
                            <i class="fas fa-stethoscope fa-3x" style="color: #0046b8;"></i>
                        </div>
                        <h5 class="mb-3 fw-bold"><?= htmlspecialchars($service->name); ?></h5>
                        <p class="text-muted small"><?= htmlspecialchars($service->description); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center"><p class="text-muted">Data layanan belum tersedia.</p></div>
        <?php endif; ?>
    </div>

    <!-- Dokter -->
    <div class="row mb-5 bg-light p-4 p-md-5 shadow-sm" style="border-radius: 1.5rem;">
        <div class="col-12 text-center mb-5">
            <h2 class="section-title fw-bold">Tim Dokter Spesialis</h2>
        </div>
        <?php if (!empty($doctors)) : ?>
            <?php foreach ($doctors as $doctor) : ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm border-0" style="border-radius: 1rem;">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <img src="https://ui-avatars.com/api/?name=<?= urlencode($doctor->name); ?>&background=random&color=fff&size=120" alt="Foto Dokter" class="img-fluid rounded-circle shadow-sm">
                            </div>
                            <h5 class="card-title fw-bold" style="font-size: 1.1rem;"><?= htmlspecialchars($doctor->name); ?></h5>
                            <p class="card-text text-muted small mb-4">
                                <?= htmlspecialchars($doctor->education); ?>
                            </p>
                            <a href="<?= base_url('doctors/detail/' . $doctor->id); ?>" class="btn btn-sm rounded-pill w-100" style="background-color: #e6f0ff; color: #0046b8; font-weight: 600;">Lihat Profil</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center"><p class="text-muted">Data dokter belum tersedia.</p></div>
        <?php endif; ?>
    </div>

    <!-- Artikel -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-5">
            <h2 class="section-title fw-bold">Berita & Informasi</h2>
            <p class="text-muted">Dapatkan informasi terbaru seputar rumah sakit dan artikel kesehatan.</p>
        </div>
        <?php if (!empty($latest_articles)) : ?>
            <?php foreach ($latest_articles as $article) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0" style="border-radius: 1rem; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Artikel">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-2" style="font-size: 1.1rem;"><?= htmlspecialchars($article->title); ?></h5>
                            <div class="mb-3 small" style="color: #0046b8; font-weight: 600;">
                                <?= date('d M Y', strtotime($article->created_at)); ?>
                            </div>
                            <p class="card-text text-muted small">
                                <?= substr(strip_tags($article->content), 0, 100); ?>...
                            </p>
                            <a href="<?= base_url('articles/detail/' . $article->slug); ?>" class="text-decoration-none" style="color: #0046b8; font-weight: 600; font-size: 0.9rem;">
                                Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center"><p class="text-muted">Artikel belum tersedia.</p></div>
        <?php endif; ?>
    </div>
</div>
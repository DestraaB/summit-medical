<div class="hero-professional mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-8 text-white">
                <h1 class="display-4">Pelayanan Kesehatan Profesional & Terpercaya</h1>
                <p class="lead mb-4">Fasilitas modern dan tenaga medis ahli untuk kesehatan anda dan keluarga di Summit Medical Center.</p>
                <a href="<?= base_url('doctors'); ?>" class="btn btn-primary btn-lg rounded-pill px-4">Jadwal Dokter</a>
                <a href="<?= base_url('services'); ?>" class="btn btn-outline-light btn-lg rounded-pill px-4 ms-2">Layanan Kami</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    
<!-- Bagian Layanan Unggulan -->
    <div class="row mb-5 text-center">
        <div class="col-12 mb-4">
            <h2 class="section-title">Layanan Unggulan</h2>
            <p class="text-muted">Dedikasi kami untuk memberikan layanan medis terbaik sesuai standar operasional.</p>
        </div>
        
        <?php if (!empty($services)) : ?>
            <?php foreach ($services as $service) : ?>
                <div class="col-md-4 mb-4">
                    <div class="service-box p-4 border rounded shadow-sm bg-white h-100">
                        <div class="icon-box text-primary mb-3">
                            <i class="fas fa-stethoscope fa-3x"></i>
                        </div>
                        <h5 class="mb-3"><?= htmlspecialchars($service->name); ?></h5>
                        <p class="text-muted small"><?= htmlspecialchars($service->description); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">Data layanan belum tersedia.</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bagian Dokter -->
    <div class="row mb-5 bg-light p-5 rounded shadow-sm">
        <div class="col-12 text-center mb-5">
            <h2 class="section-title">Tim Dokter Spesialis</h2>
        </div>
        <?php if (!empty($doctors)) : ?>
            <?php foreach ($doctors as $doctor) : ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm custom-card border-0">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <img src="https://ui-avatars.com/api/?name=<?= urlencode($doctor->name); ?>&background=random&color=fff&size=120" alt="Foto Dokter" class="img-fluid rounded-circle doctor-avatar">
                            </div>
                            <h5 class="card-title"><?= htmlspecialchars($doctor->name); ?></h5>
                            <p class="card-text text-muted small mb-4">
                                <?= htmlspecialchars($doctor->education); ?>
                            </p>
                            <a href="<?= base_url('doctors/detail/' . $doctor->id); ?>" class="btn btn-sm btn-outline-primary rounded-pill w-100">Profil Dokter</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">Data dokter belum tersedia.</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bagian Berita dan Artikel -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-5">
            <h2 class="section-title">Berita & Informasi Kesehatan</h2>
            <p class="text-muted">Dapatkan informasi terbaru seputar rumah sakit dan artikel edukasi kesehatan.</p>
        </div>
        <?php if (!empty($latest_articles)) : ?>
            <?php foreach ($latest_articles as $article) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm custom-card border-0">
                        <!-- Menambahkan gambar ilustrasi sementara untuk artikel -->
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Ilustrasi Artikel">
                        
                        <div class="card-body p-4">
                            <h5 class="card-title mb-2"><?= htmlspecialchars($article->title); ?></h5>
                            <div class="article-meta mb-3 text-primary">
                                <?= date('d M Y', strtotime($article->created_at)); ?>
                            </div>
                            <p class="card-text text-muted">
                                <?= substr(strip_tags($article->content), 0, 100); ?>...
                            </p>
                            <a href="<?= base_url('articles/detail/' . $article->slug); ?>" class="text-primary text-decoration-none">
                                Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">Artikel belum tersedia.</p>
            </div>
        <?php endif; ?>
    </div>

</div>
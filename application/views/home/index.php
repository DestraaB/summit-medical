<!-- =====================================================
     HERO SECTION
===================================================== -->

<section class="hero">

    <div class="container hero-container">

        <!-- Konten Hero -->
        <div class="hero-content">

            <span class="hero-badge">
                ✦ Pelayanan Kesehatan Terpercaya
            </span>

            <h1>
                Kesehatan Anda,
                <span>Prioritas Kami.</span>
            </h1>

            <p>
                Summit Medical Center hadir memberikan pelayanan kesehatan
                yang profesional, modern, dan berorientasi pada kebutuhan
                setiap pasien dan keluarga.
            </p>

            <div class="hero-buttons">

                <a href="<?= base_url('appointment'); ?>" class="btn btn-primary">
                    Buat Janji
                </a>

                <a href="<?= base_url('services'); ?>" class="btn btn-outline">
                    Lihat Layanan
                </a>

            </div>

        </div>


        <!-- Area Gambar -->
        <div class="hero-image">

            <div>
                <strong>Summit Medical Center</strong>
                <p>
                    Modern Healthcare
                </p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     LAYANAN UNGGULAN
     ========================= -->

<section class="section section-light">

    <div class="container">

        <!-- Judul Section -->
        <div class="section-header">

            <div class="section-label">
                Layanan Kami
            </div>

            <h2 class="section-title">
                Pelayanan Kesehatan untuk Anda
            </h2>

            <p class="section-description">
                Kami menyediakan berbagai layanan kesehatan dengan
                dukungan tenaga medis profesional dan fasilitas modern.
            </p>

        </div>


        <!-- Card Layanan -->
        <div class="service-grid">

            <!-- Layanan 1 -->
            <div class="service-card">

                <div class="card-icon">
                    ✚
                </div>

                <h3>
                    Rawat Jalan
                </h3>

                <p>
                    Pemeriksaan dan konsultasi kesehatan bersama
                    dokter sesuai kebutuhan Anda.
                </p>

            </div>


            <!-- Layanan 2 -->
            <div class="service-card">

                <div class="card-icon">
                    ❤
                </div>

                <h3>
                    IGD 24 Jam
                </h3>

                <p>
                    Layanan gawat darurat yang siap memberikan
                    pertolongan medis selama 24 jam.
                </p>

            </div>


            <!-- Layanan 3 -->
            <div class="service-card">

                <div class="card-icon">
                    +
                </div>

                <h3>
                    Rawat Inap
                </h3>

                <p>
                    Fasilitas rawat inap yang nyaman dengan
                    pelayanan dan pemantauan tenaga medis.
                </p>

            </div>


            <!-- Layanan 4 -->
            <div class="service-card">

                <div class="card-icon">
                    ♡
                </div>

                <h3>
                    Klinik Spesialis
                </h3>

                <p>
                    Konsultasi dengan dokter spesialis dari
                    berbagai bidang kesehatan.
                </p>

            </div>


            <!-- Layanan 5 -->
            <div class="service-card">

                <div class="card-icon">
                    ◉
                </div>

                <h3>
                    Laboratorium
                </h3>

                <p>
                    Pemeriksaan laboratorium untuk membantu
                    menunjang diagnosis dan pemantauan kesehatan.
                </p>

            </div>


            <!-- Layanan 6 -->
            <div class="service-card">

                <div class="card-icon">
                    ▣
                </div>

                <h3>
                    Radiologi
                </h3>

                <p>
                    Pemeriksaan penunjang menggunakan teknologi
                    pencitraan medis.
                </p>

            </div>

        </div>

    </div>

</section>
<section class="articles-section">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                INFORMASI KESEHATAN
            </span>

            <h2>
                Artikel
                <span>Terbaru</span>
            </h2>

            <p>
                Informasi kesehatan dan tips terpercaya
                dari Summit Medical.
            </p>

        </div>


        <div class="articles-grid">

            <?php if (!empty($articles)): ?>

                <?php foreach ($articles as $article): ?>

                    <article class="article-card">

                        <div class="article-card-content">

                            <span class="article-date">
                                <?= date(
                                    'd F Y',
                                    strtotime($article->created_at)
                                ); ?>
                            </span>

                            <h3>
                                <?= htmlspecialchars($article->title); ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars(
                                    word_limiter(
                                        strip_tags($article->content),
                                        20
                                    )
                                ); ?>
                            </p>

                            <a
                                href="<?= site_url('articles/detail/' . $article->slug); ?>"
                                class="article-link">

                                Baca Selengkapnya →

                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            <?php else: ?>

                <p>
                    Belum ada artikel.
                </p>

            <?php endif; ?>

        </div>


        <div class="articles-more">

            <a
                href="<?= site_url('articles'); ?>"
                class="articles-button">

                Lihat Semua Artikel

            </a>

        </div>

    </div>

</section>


<!-- =====================================================
     QUICK INFO
===================================================== -->

<section class="quick-info">

    <div class="quick-info-container">

        <div class="info-card">

            <span class="info-icon">🩺</span>

            <div>
                <strong>Dokter Profesional</strong>
                <p>Tenaga medis berpengalaman</p>
            </div>

        </div>


        <div class="info-card">

            <span class="info-icon">🏥</span>

            <div>
                <strong>Fasilitas Modern</strong>
                <p>Didukung teknologi kesehatan</p>
            </div>

        </div>


        <div class="info-card">

            <span class="info-icon">⏰</span>

            <div>
                <strong>Pelayanan Terjadwal</strong>
                <p>Siap membantu kebutuhan Anda</p>
            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     ABOUT
===================================================== -->

<section class="about">

    <div class="about-container">

        <div class="about-image">

            <div class="about-image-placeholder">
                Summit Medical Center
            </div>

        </div>


        <div class="about-content">

            <span class="section-label">
                Tentang Kami
            </span>

            <h2>
                Pelayanan Kesehatan
                dengan Standar Terbaik
            </h2>

            <p>
                Summit Medical Center merupakan pusat pelayanan
                kesehatan yang mengutamakan kualitas, keamanan,
                dan kenyamanan pasien.
            </p>

            <p>
                Kami didukung oleh tenaga medis profesional,
                fasilitas yang memadai, serta pelayanan yang
                mengedepankan kebutuhan setiap pasien.
            </p>

            <a href="<?= base_url('tentang'); ?>" class="text-link">
                Selengkapnya →
            </a>

        </div>

    </div>

</section>


<!-- =====================================================
     SERVICES
===================================================== -->

<section class="services">

    <div class="section-header">

        <span class="section-label">
            Layanan Kami
        </span>

        <h2>
            Layanan Kesehatan untuk Anda
        </h2>

        <p>
            Berbagai layanan kesehatan yang dirancang untuk
            memberikan pelayanan terbaik kepada pasien.
        </p>

    </div>


    <div class="services-container">

        <div class="service-card">

            <div class="service-icon">
                🩺
            </div>

            <h3>
                Poliklinik
            </h3>

            <p>
                Pelayanan konsultasi dan pemeriksaan
                oleh dokter profesional.
            </p>

            <a href="<?= base_url('layanan'); ?>">
                Lihat layanan →
            </a>

        </div>


        <div class="service-card">

            <div class="service-icon">
                ❤️
            </div>

            <h3>
                Pemeriksaan Kesehatan
            </h3>

            <p>
                Pemeriksaan kesehatan dengan proses
                yang nyaman dan terpercaya.
            </p>

            <a href="<?= base_url('layanan'); ?>">
                Lihat layanan →
            </a>

        </div>


        <div class="service-card">

            <div class="service-icon">
                🧪
            </div>

            <h3>
                Laboratorium
            </h3>

            <p>
                Pemeriksaan laboratorium dengan dukungan
                peralatan yang modern.
            </p>

            <a href="<?= base_url('layanan'); ?>">
                Lihat layanan →
            </a>

        </div>

    </div>

</section>
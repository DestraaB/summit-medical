<div class="services-page">

<!-- =========================
     HERO
     ========================= -->
<section class="services-hero">
    <div class="container">

        <div class="services-hero-content">

            <span class="services-eyebrow">
                <i class="fas fa-heart-pulse"></i>
                SUMMIT MEDICAL CENTER
            </span>

            <h1>
                Layanan Kesehatan
                <span>Terpercaya untuk Anda</span>
            </h1>

            <p>
                Kami menghadirkan berbagai layanan medis dengan
                dukungan tenaga profesional, fasilitas modern,
                dan pelayanan yang mengutamakan kebutuhan pasien.
            </p>

        </div>

    </div>
</section>


<!-- =========================
     SERVICES
     ========================= -->
<section class="services-content">

    <div class="container">

        <div class="services-heading">

            <div>
                <span class="section-eyebrow">
                    OUR SERVICES
                </span>

                <h2>
                    Layanan Medis Kami
                </h2>
            </div>

            <p>
                Pilihan layanan kesehatan untuk membantu Anda
                mendapatkan perawatan yang tepat.
            </p>

        </div>


        <div class="row g-4">

            <?php if (!empty($services)) : ?>

                <?php foreach ($services as $service) : ?>

                    <?php if ($service->status == 1) : ?>

                        <div class="col-lg-4 col-md-6">

                            <article class="service-modern-card">

                                <!-- IMAGE -->
                                <div class="service-image-wrapper">

                                    <?php if (!empty($service->image)) : ?>

                                        <img
                                            src="<?= base_url('uploads/services/' . $service->image); ?>"
                                            alt="<?= htmlspecialchars($service->name); ?>"
                                            class="service-image"
                                        >

                                    <?php else : ?>

                                        <img
                                            src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=800&q=80"
                                            alt="<?= htmlspecialchars($service->name); ?>"
                                            class="service-image"
                                        >

                                    <?php endif; ?>


                                    <div class="service-image-overlay"></div>


                                    <!-- ICON -->
                                    <div class="service-floating-icon">

                                        <i class="<?= htmlspecialchars($service->icon); ?>"></i>

                                    </div>

                                </div>


                                <!-- CONTENT -->
                                <div class="service-card-content">

                                    <span class="service-number">
                                        SERVICE
                                    </span>

                                    <h3>
                                        <?= htmlspecialchars($service->name); ?>
                                    </h3>

                                    <p>
                                        <?= htmlspecialchars($service->short_description); ?>
                                    </p>


                                    <a
                                        href="<?= base_url('services/detail/' . $service->slug); ?>"
                                        class="service-detail-link"
                                    >
                                        <span>
                                            Lihat Detail
                                        </span>

                                        <span class="service-arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </a>

                                </div>

                            </article>

                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>

            <?php else : ?>

                <div class="col-12">

                    <div class="services-empty">

                        <div class="empty-icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>

                        <h3>
                            Belum Ada Layanan
                        </h3>

                        <p>
                            Belum ada data layanan kesehatan
                            yang tersedia saat ini.
                        </p>

                    </div>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>


<!-- =========================
     CTA
     ========================= -->
<section class="services-cta">

    <div class="container">

        <div class="services-cta-box">

            <div class="cta-icon">
                <i class="fas fa-user-doctor"></i>
            </div>

            <div class="cta-content">

                <span>
                    BUTUH INFORMASI?
                </span>

                <h2>
                    Konsultasikan kebutuhan kesehatan Anda
                </h2>

                <p>
                    Tim Summit Medical Center siap membantu
                    memberikan informasi mengenai layanan yang tersedia.
                </p>

            </div>

            <a
                href="<?= base_url('contact'); ?>"
                class="cta-button"
            >
                Hubungi Kami
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


</div>

<!-- =========================================
     FACILITIES PAGE
========================================= -->

<link rel="stylesheet" href="<?= base_url('assets/css/facilities.css'); ?>">

<div class="facilities-page">


    <!-- =========================================
         HERO
    ========================================= -->

    <section class="facilities-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <div class="facilities-hero-content">

                        <span class="facilities-eyebrow">
                            <i class="fas fa-hospital"></i>
                            FASILITAS SUMMIT MEDICAL CENTER
                        </span>

                        <h1>
                            Fasilitas Modern untuk
                            <span>Pelayanan Terbaik</span>
                        </h1>

                        <p>
                            Summit Medical Center menyediakan berbagai fasilitas
                            kesehatan modern untuk mendukung kenyamanan, keamanan,
                            dan kualitas pelayanan bagi setiap pasien.
                        </p>

                        <div class="facilities-hero-info">

                            <div class="hero-info-item">

                                <div class="hero-info-icon">
                                    <i class="fas fa-heart-pulse"></i>
                                </div>

                                <div>
                                    <strong>Pelayanan Profesional</strong>
                                    <span>Untuk kebutuhan kesehatan Anda</span>
                                </div>

                            </div>


                            <div class="hero-info-item">

                                <div class="hero-info-icon">
                                    <i class="fas fa-shield-heart"></i>
                                </div>

                                <div>
                                    <strong>Fasilitas Modern</strong>
                                    <span>Nyaman dan terpercaya</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- HERO VISUAL -->

                <div class="col-lg-5">

                    <div class="facilities-hero-visual">

                        <div class="facility-hero-circle circle-one"></div>
                        <div class="facility-hero-circle circle-two"></div>

                        <div class="facility-main-icon">
                            <i class="fas fa-hospital"></i>
                        </div>

                        <div class="floating-medical-card card-one">

                            <i class="fas fa-heartbeat"></i>

                            <span>
                                Healthcare
                            </span>

                        </div>


                        <div class="floating-medical-card card-two">

                            <i class="fas fa-star"></i>

                            <span>
                                Modern Facility
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================
         INTRODUCTION
    ========================================= -->

    <section class="facilities-intro">

        <div class="container">

            <div class="facilities-section-heading text-center">

                <span>
                    OUR FACILITIES
                </span>

                <h2>
                    Fasilitas untuk Kenyamanan Anda
                </h2>

                <p>
                    Kami menyediakan berbagai fasilitas yang dirancang untuk
                    memberikan pengalaman pelayanan kesehatan yang nyaman,
                    aman, dan berkualitas.
                </p>

            </div>

        </div>

    </section>



    <!-- =========================================
         FACILITIES GRID
    ========================================= -->

    <section class="facilities-list">

        <div class="container">

            <?php if (!empty($facilities)) : ?>

                <div class="row">

                    <?php foreach ($facilities as $f) : ?>

                        <?php if ($f->status == 1) : ?>

                            <div class="col-lg-4 col-md-6 mb-4 facility-aos">

                                <div class="facility-card">


                                    <!-- IMAGE -->

                                    <div class="facility-image">

                                        <?php if (!empty($f->image)) : ?>

                                            <img
                                                src="<?= base_url('uploads/facilities/' . $f->image); ?>"
                                                alt="<?= htmlspecialchars($f->name); ?>"
                                            >

                                        <?php else : ?>

                                            <img
                                                src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80"
                                                alt="Default Facility"
                                            >

                                        <?php endif; ?>


                                        <div class="facility-image-overlay"></div>


                                        <div class="facility-badge">

                                            <i class="fas fa-hospital"></i>

                                            <span>
                                                Facility
                                            </span>

                                        </div>

                                    </div>



                                    <!-- CONTENT -->

                                    <div class="facility-content">

                                        <div class="facility-icon">

                                            <i class="fas fa-building"></i>

                                        </div>


                                        <h3>
                                            <?= htmlspecialchars($f->name); ?>
                                        </h3>


                                        <p>

                                            <?= htmlspecialchars($f->short_description); ?>

                                        </p>


                                        <a
                                            href="<?= base_url('facilities/detail/' . $f->slug); ?>"
                                            class="facility-button"
                                        >

                                            <span>
                                                Lihat Detail
                                            </span>

                                            <i class="fas fa-arrow-right"></i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>


            <?php else : ?>

                <div class="facility-empty">

                    <div class="facility-empty-icon">

                        <i class="fas fa-hospital"></i>

                    </div>

                    <h3>
                        Fasilitas Belum Tersedia
                    </h3>

                    <p>
                        Data fasilitas rumah sakit belum tersedia saat ini.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </section>



    <!-- =========================================
         BOTTOM CTA
    ========================================= -->

    <section class="facilities-cta">

        <div class="container">

            <div class="facilities-cta-box">

                <div class="cta-decoration cta-circle-one"></div>
                <div class="cta-decoration cta-circle-two"></div>


                <div class="cta-content">

                    <div class="cta-icon">

                        <i class="fas fa-heart-pulse"></i>

                    </div>


                    <div>

                        <span>
                            SUMMIT MEDICAL CENTER
                        </span>

                        <h2>
                            Kesehatan Anda adalah Prioritas Kami
                        </h2>

                        <p>
                            Dapatkan informasi lebih lanjut mengenai layanan
                            dan fasilitas yang tersedia di Summit Medical Center.
                        </p>

                    </div>

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
<!-- =========================================
     FACILITIES PAGE
========================================= -->

<link rel="stylesheet" href="<?= base_url('assets/css/facilities.css'); ?>">

<!-- TAMBAHAN: CSS Animasi Halus -->
<style>
    /* --- Keyframes Animasi --- */
    @keyframes fadeInUpFac {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInRightFac {
        0% { opacity: 0; transform: translateX(50px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes floatingItem {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* --- Menerapkan Animasi ke Elemen --- */
    .facilities-hero-content {
        opacity: 0;
        animation: fadeInUpFac 0.8s ease-out forwards;
    }

    .facilities-hero-visual {
        opacity: 0;
        animation: slideInRightFac 0.8s ease-out 0.2s forwards;
    }

    /* Membuat ornamen hero melayang */
    .floating-medical-card {
        animation: floatingItem 4s ease-in-out infinite;
    }
    .floating-medical-card.card-two {
        animation-delay: 2s; /* Jeda agar melayangnya tidak bersamaan */
    }

    .facilities-section-heading {
        opacity: 0;
        animation: fadeInUpFac 0.8s ease-out 0.4s forwards;
    }

    /* Konfigurasi awal kartu sebelum animasi */
    .facility-aos {
        opacity: 0; 
        animation: fadeInUpFac 0.8s ease-out forwards;
    }

    /* Tambahan efek membal (hover) pada kartu */
    .facility-card {
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease !important;
    }
    .facility-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0, 86, 179, 0.12) !important;
    }

    .facilities-cta-box {
        opacity: 0;
        animation: fadeInUpFac 0.8s ease-out 0.4s forwards; /* Akan tereksekusi saat halaman dimuat */
    }
</style>

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

                    <?php 
                        $delay = 0.2; // Variabel penentu jeda animasi awal
                        foreach ($facilities as $f) : 
                    ?>

                        <?php if ($f->status == 1) : ?>

                            <!-- Menambahkan style delay langsung ke grid -->
                            <div class="col-lg-4 col-md-6 mb-4 facility-aos" style="animation-delay: <?= $delay; ?>s;">

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

                                            <?= htmlspecialchars($f->short_description ?? ''); ?>

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

                            <?php $delay += 0.15; // Tambah jeda untuk elemen berikutnya ?>

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
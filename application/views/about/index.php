
<!-- =========================================================
     SUMMIT MEDICAL CENTER
     ABOUT PAGE
     ========================================================= -->

<div class="about-page">

    <!-- =========================
         HERO
         ========================= -->

    <section class="about-hero">

        <div class="container">

            <div class="row align-items-center g-5">

                <!-- TEXT -->

                <div class="col-lg-6" data-aos="fade-right">

                    <div class="about-eyebrow">
                        <span>
                            <i class="fas fa-plus"></i>
                            TENTANG KAMI
                        </span>
                    </div>

                    <h1 class="about-title">
                        Mengenal lebih dekat
                        <span>Summit Medical Center</span>
                    </h1>

                    <p class="about-lead">
                        Rumah sakit yang hadir dengan komitmen untuk
                        memberikan pelayanan kesehatan yang profesional,
                        humanis, dan terus berkembang mengikuti kebutuhan
                        masyarakat.
                    </p>

                    <div class="about-hero-actions">

                        <a href="<?= base_url('services'); ?>"
                           class="about-primary-btn">
                            <i class="fas fa-stethoscope"></i>
                            Lihat Layanan
                            <i class="fas fa-arrow-right"></i>
                        </a>

                        <a href="<?= base_url('contact'); ?>"
                           class="about-secondary-btn">
                            Hubungi Kami
                        </a>

                    </div>

                </div>


                <!-- IMAGE -->

                <div class="col-lg-6" data-aos="fade-left">

                    <div class="about-hero-image">

                        <img
                            src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=85"
                            alt="Summit Medical Center"
                        >

                        <div class="about-image-badge">

                            <div class="badge-icon">
                                <i class="fas fa-heart-pulse"></i>
                            </div>

                            <div>
                                <strong>
                                    Care with Purpose
                                </strong>

                                <small>
                                    Melayani dengan hati
                                </small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         INTRODUCTION
         ========================= -->

    <section class="about-introduction">

        <div class="container">

            <div class="row g-5 align-items-start">

                <div class="col-lg-4" data-aos="fade-up">

                    <div class="about-section-label">
                        <span>
                            SUMMIT MEDICAL
                        </span>
                    </div>

                    <h2>
                        Pelayanan kesehatan
                        <span>yang berarti.</span>
                    </h2>

                </div>


                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="150">

                    <div class="about-description">

                        <?php if (!empty($profile->description)) : ?>

                            <p>
                                <?= nl2br(htmlspecialchars($profile->description)); ?>
                            </p>

                        <?php else : ?>

                            <p>
                                Summit Medical Center berkomitmen
                                menghadirkan pelayanan kesehatan yang
                                berkualitas dengan mengutamakan keselamatan,
                                kenyamanan, dan kebutuhan setiap pasien.
                            </p>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         VALUES / HIGHLIGHTS
         ========================= -->

    <section class="about-values">

        <div class="container">

            <div class="about-section-heading text-center"
                 data-aos="fade-up">

                <div class="about-section-label justify-content-center">
                    <span>
                        NILAI KAMI
                    </span>
                </div>

                <h2>
                    Mengutamakan manusia
                    <span>dalam setiap pelayanan.</span>
                </h2>

                <p>
                    Setiap pelayanan kami dibangun berdasarkan kepedulian,
                    profesionalisme, dan komitmen terhadap kualitas.
                </p>

            </div>


            <div class="row g-4 mt-4">

                <!-- VALUE 1 -->

                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="100">

                    <div class="about-value-card">

                        <div class="value-number">
                            01
                        </div>

                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>

                        <h3>
                            Humanis
                        </h3>

                        <p>
                            Menghadirkan pelayanan yang ramah,
                            peduli, dan menghargai setiap pasien.
                        </p>

                    </div>

                </div>


                <!-- VALUE 2 -->

                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="200">

                    <div class="about-value-card">

                        <div class="value-number">
                            02
                        </div>

                        <div class="value-icon">
                            <i class="fas fa-user-doctor"></i>
                        </div>

                        <h3>
                            Profesional
                        </h3>

                        <p>
                            Didukung tenaga kesehatan yang kompeten
                            dan berorientasi pada kualitas pelayanan.
                        </p>

                    </div>

                </div>


                <!-- VALUE 3 -->

                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="300">

                    <div class="about-value-card">

                        <div class="value-number">
                            03
                        </div>

                        <div class="value-icon">
                            <i class="fas fa-microchip"></i>
                        </div>

                        <h3>
                            Inovatif
                        </h3>

                        <p>
                            Terus berkembang melalui teknologi,
                            pengetahuan, dan inovasi kesehatan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         VISION & MISSION
         ========================= -->

    <section class="about-vision-mission">

        <div class="container">

            <div class="row g-4">


                <!-- VISION -->

                <div class="col-lg-5"
                     data-aos="fade-right">

                    <div class="vision-card">

                        <div class="vm-top">

                            <span>
                                OUR VISION
                            </span>

                            <div class="vm-icon">
                                <i class="fas fa-eye"></i>
                            </div>

                        </div>

                        <h2>
                            Visi Kami
                        </h2>

                        <div class="vm-line"></div>

                        <p>
                            <?php if (!empty($profile->vision)) : ?>

                                <?= nl2br(htmlspecialchars($profile->vision)); ?>

                            <?php else : ?>

                                Menjadi rumah sakit yang unggul
                                dalam memberikan pelayanan kesehatan
                                yang berkualitas dan terpercaya.

                            <?php endif; ?>
                        </p>

                    </div>

                </div>


                <!-- MISSION -->

                <div class="col-lg-7"
                     data-aos="fade-left">

                    <div class="mission-card">

                        <div class="vm-top">

                            <span>
                                OUR MISSION
                            </span>

                            <div class="vm-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>

                        </div>

                        <h2>
                            Misi Kami
                        </h2>

                        <div class="vm-line"></div>

                        <div class="mission-content">

                            <?php if (!empty($profile->mission)) : ?>

                                <p>
                                    <?= nl2br(htmlspecialchars($profile->mission)); ?>
                                </p>

                            <?php else : ?>

                                <p>
                                    Memberikan pelayanan kesehatan
                                    yang aman, berkualitas, dan berorientasi
                                    pada kebutuhan pasien.
                                </p>

                                <p>
                                    Mengembangkan sumber daya manusia
                                    yang profesional dan berintegritas.
                                </p>

                                <p>
                                    Mengembangkan inovasi dan teknologi
                                    untuk meningkatkan kualitas pelayanan.
                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         HISTORY
         ========================= -->

    <?php if (!empty($profile->history)) : ?>

    <section class="about-history">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-5"
                     data-aos="fade-right">

                    <div class="history-image">

                        <img
                            src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=1000&q=85"
                            alt="Perjalanan Summit Medical Center"
                        >

                        <div class="history-year">
                            <span>OUR</span>
                            <strong>STORY</strong>
                        </div>

                    </div>

                </div>


                <div class="col-lg-7"
                     data-aos="fade-left">

                    <div class="about-section-label">
                        <span>
                            PERJALANAN KAMI
                        </span>
                    </div>

                    <h2 class="history-title">
                        Tumbuh bersama
                        <span>masyarakat.</span>
                    </h2>

                    <div class="history-text">

                        <?= nl2br(htmlspecialchars($profile->history)); ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php endif; ?>


    <!-- =========================
         CONTACT INFORMATION
         ========================= -->

    <section class="about-contact">

        <div class="container">

            <div class="contact-box"
                 data-aos="zoom-in">

                <div class="row align-items-center g-4">

                    <div class="col-lg-6">

                        <div class="about-section-label about-label-light">

                            <span>
                                HUBUNGI KAMI
                            </span>

                        </div>

                        <h2>
                            Kami siap membantu
                            kebutuhan kesehatan Anda.
                        </h2>

                        <p>
                            Jangan ragu untuk menghubungi Summit Medical
                            Center untuk mendapatkan informasi lebih lanjut
                            mengenai layanan dan fasilitas kami.
                        </p>

                    </div>


                    <div class="col-lg-6">

                        <div class="contact-information">

                            <?php if (!empty($profile->phone)) : ?>

                            <a href="tel:<?= htmlspecialchars($profile->phone); ?>"
                               class="contact-item">

                                <div>
                                    <i class="fas fa-phone"></i>
                                </div>

                                <span>
                                    <?= htmlspecialchars($profile->phone); ?>
                                </span>

                            </a>

                            <?php endif; ?>


                            <?php if (!empty($profile->whatsapp)) : ?>

                            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $profile->whatsapp); ?>"
                               target="_blank"
                               class="contact-item">

                                <div>
                                    <i class="fab fa-whatsapp"></i>
                                </div>

                                <span>
                                    WhatsApp
                                </span>

                            </a>

                            <?php endif; ?>


                            <?php if (!empty($profile->email)) : ?>

                            <a href="mailto:<?= htmlspecialchars($profile->email); ?>"
                               class="contact-item">

                                <div>
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <span>
                                    <?= htmlspecialchars($profile->email); ?>
                                </span>

                            </a>

                            <?php endif; ?>


                            <?php if (!empty($profile->address)) : ?>

                            <div class="contact-item">

                                <div>
                                    <i class="fas fa-location-dot"></i>
                                </div>

                                <span>
                                    <?= nl2br(htmlspecialchars($profile->address)); ?>
                                </span>

                            </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         FINAL CTA
         ========================= -->

    <section class="about-final-cta">

        <div class="container text-center"
             data-aos="fade-up">

            <span class="cta-small">
                SUMMIT MEDICAL CENTER
            </span>

            <h2>
                Kesehatan Anda adalah
                <span>prioritas kami.</span>
            </h2>

            <p>
                Temukan layanan kesehatan yang sesuai
                dengan kebutuhan Anda.
            </p>

            <div class="cta-buttons">

                <a href="<?= base_url('doctors'); ?>"
                   class="about-primary-btn">
                    <i class="fas fa-user-doctor"></i>
                    Temukan Dokter
                </a>

                <a href="<?= base_url('services'); ?>"
                   class="about-secondary-btn">
                    Lihat Layanan
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>

</div>


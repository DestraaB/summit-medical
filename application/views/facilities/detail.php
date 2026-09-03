<!-- =========================================
     FACILITY DETAIL PAGE
========================================= -->

<link rel="stylesheet" href="<?= base_url('assets/css/facilities.css'); ?>">

<div class="facility-detail-page">


    <!-- =========================================
         HERO
    ========================================= -->

    <section class="facility-detail-hero">

        <div class="container">

            <!-- BREADCRUMB -->

            <nav class="facility-breadcrumb">

                <a href="<?= base_url(); ?>">

                    <i class="fas fa-home"></i>

                    Beranda

                </a>


                <i class="fas fa-chevron-right"></i>


                <a href="<?= base_url('facilities'); ?>">

                    Fasilitas

                </a>


                <i class="fas fa-chevron-right"></i>


                <span>

                    <?= htmlspecialchars($facility->name); ?>

                </span>

            </nav>


            <div class="row align-items-center">


                <!-- LEFT -->

                <div class="col-lg-6">

                    <div class="facility-detail-content">

                        <span class="facility-detail-eyebrow">

                            <i class="fas fa-building"></i>

                            FASILITAS KAMI

                        </span>


                        <h1>

                            <?= htmlspecialchars($facility->name); ?>

                        </h1>


                        <p class="facility-detail-short">

                            <?= htmlspecialchars($facility->short_description); ?>

                        </p>


                        <div class="facility-detail-actions">

                            <a
                                href="<?= base_url('contact'); ?>"
                                class="detail-primary-button"
                            >

                                <i class="fas fa-paper-plane"></i>

                                Hubungi Kami

                            </a>


                            <a
                                href="<?= base_url('facilities'); ?>"
                                class="detail-secondary-button"
                            >

                                <i class="fas fa-arrow-left"></i>

                                Semua Fasilitas

                            </a>

                        </div>

                    </div>

                </div>



                <!-- RIGHT IMAGE -->

                <div class="col-lg-6">

                    <div class="facility-detail-image-wrapper">


                        <?php if (!empty($facility->image)) : ?>

                            <img
                                src="<?= base_url('uploads/facilities/' . $facility->image); ?>"
                                alt="<?= htmlspecialchars($facility->name); ?>"
                                class="facility-detail-image"
                            >

                        <?php else : ?>

                            <img
                                src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=80"
                                alt="Default Facility"
                                class="facility-detail-image"
                            >

                        <?php endif; ?>


                        <div class="facility-detail-image-decoration">

                            <i class="fas fa-hospital"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================
         DETAIL CONTENT
    ========================================= -->

    <section class="facility-detail-information">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-9">

                    <div class="facility-information-card">


                        <!-- HEADER -->

                        <div class="facility-information-header">

                            <div class="information-icon">

                                <i class="fas fa-circle-info"></i>

                            </div>


                            <div>

                                <span>
                                    INFORMASI FASILITAS
                                </span>

                                <h2>
                                    Tentang Fasilitas Ini
                                </h2>

                            </div>

                        </div>



                        <!-- DESCRIPTION -->

                        <div class="facility-information-description">

                            <?= nl2br(htmlspecialchars($facility->description)); ?>

                        </div>



                        <!-- INFO BOX -->

                        <div class="facility-feature-box">

                            <div class="feature-box-icon">

                                <i class="fas fa-shield-heart"></i>

                            </div>


                            <div>

                                <h4>
                                    Kenyamanan dan Keamanan Pasien
                                </h4>

                                <p>
                                    Fasilitas ini merupakan bagian dari komitmen
                                    Summit Medical Center untuk memberikan
                                    pelayanan kesehatan yang berkualitas,
                                    nyaman, dan terpercaya.
                                </p>

                            </div>

                        </div>



                        <!-- ACTION -->

                        <div class="facility-information-footer">

                            <a
                                href="<?= base_url('facilities'); ?>"
                                class="back-facility-button"
                            >

                                <i class="fas fa-arrow-left"></i>

                                Kembali ke Fasilitas

                            </a>


                            <a
                                href="<?= base_url('contact'); ?>"
                                class="contact-facility-button"
                            >

                                Hubungi Kami

                                <i class="fas fa-arrow-right"></i>

                            </a>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================
         CTA
    ========================================= -->

    <section class="facility-detail-cta">

        <div class="container">

            <div class="facility-detail-cta-box">


                <div>

                    <span>
                        BUTUH INFORMASI LEBIH LANJUT?
                    </span>

                    <h2>
                        Kami Siap Membantu Anda
                    </h2>

                    <p>
                        Hubungi Summit Medical Center untuk mendapatkan
                        informasi mengenai layanan dan fasilitas kami.
                    </p>

                </div>


                <a href="<?= base_url('contact'); ?>">

                    Hubungi Sekarang

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>


</div>
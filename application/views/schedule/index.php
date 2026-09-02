<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="doctor-schedule-page">

    <!-- =========================
         HERO
    ========================== -->
    <section class="doctor-schedule-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div
                        class="doctor-schedule-hero-content"
                        data-aos="fade-up"
                    >

                        <span class="doctor-schedule-label">
                            <i class="fas fa-calendar-alt"></i>
                            JADWAL PRAKTIK
                        </span>

                        <h1>
                            Jadwal Praktik
                            <span>Dokter</span>
                        </h1>

                        <p>
                            Temukan informasi jadwal praktik dokter
                            di Summit Medical Center dan rencanakan
                            kunjungan Anda dengan lebih mudah.
                        </p>

                    </div>

                </div>


                <div class="col-lg-4 d-none d-lg-block">

                    <div
                        class="doctor-schedule-hero-icon"
                        data-aos="zoom-in"
                    >

                        <div class="doctor-schedule-icon-circle">
                            <i class="fas fa-user-md"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Decorative -->

        <div class="doctor-schedule-shape shape-one"></div>
        <div class="doctor-schedule-shape shape-two"></div>

    </section>



    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <section class="doctor-schedule-content">

        <div class="container">


            <!-- Heading -->

            <div
                class="doctor-schedule-heading text-center"
                data-aos="fade-up"
            >

                <span>SUMMIT MEDICAL CENTER</span>

                <h2>
                    Jadwal Dokter Kami
                </h2>

                <p>
                    Informasi jadwal praktik dokter yang tersedia
                    untuk membantu Anda mempersiapkan kunjungan.
                </p>

            </div>



            <!-- =========================
                 SCHEDULE LIST
            ========================== -->

            <div class="row">


                <?php if (!empty($schedules)) : ?>

                    <?php foreach ($schedules as $index => $schedule) : ?>


                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="<?= ($index % 3) * 100; ?>"
                        >

                            <div class="doctor-schedule-card">


                                <!-- =====================
                                     TOP / DOCTOR
                                ====================== -->

                                <div class="doctor-schedule-profile">


                                    <!-- PHOTO -->

                                    <div class="doctor-schedule-photo">

                                        <?php if (!empty($schedule->doctor_photo)) : ?>

                                            <img
                                                src="<?= base_url('uploads/doctors/' . $schedule->doctor_photo); ?>"
                                                alt="<?= htmlspecialchars($schedule->doctor_name); ?>"
                                            >

                                        <?php else : ?>

                                            <div class="doctor-schedule-no-photo">

                                                <i class="fas fa-user-md"></i>

                                            </div>

                                        <?php endif; ?>

                                    </div>


                                    <!-- NAME -->

                                    <div class="doctor-schedule-profile-info">

                                        <span class="doctor-schedule-type">
                                            DOKTER
                                        </span>

                                        <h3>
                                            <?= htmlspecialchars($schedule->doctor_name); ?>
                                        </h3>


                                        <p>

                                            <i class="fas fa-stethoscope"></i>

                                            <?= !empty($schedule->specialty_name)
                                                ? htmlspecialchars($schedule->specialty_name)
                                                : 'Spesialisasi belum tersedia'; ?>

                                        </p>

                                    </div>


                                </div>



                                <!-- =====================
                                     DIVIDER
                                ====================== -->

                                <div class="doctor-schedule-divider"></div>



                                <!-- =====================
                                     SCHEDULE
                                ====================== -->

                                <div class="doctor-schedule-details">


                                    <!-- DAY -->

                                    <div class="doctor-schedule-detail-item">

                                        <div class="doctor-schedule-detail-icon">

                                            <i class="fas fa-calendar-day"></i>

                                        </div>


                                        <div class="doctor-schedule-detail-text">

                                            <small>
                                                Hari Praktik
                                            </small>

                                            <strong>
                                                <?= htmlspecialchars($schedule->day); ?>
                                            </strong>

                                        </div>

                                    </div>



                                    <!-- TIME -->

                                    <div class="doctor-schedule-detail-item">

                                        <div class="doctor-schedule-detail-icon">

                                            <i class="far fa-clock"></i>

                                        </div>


                                        <div class="doctor-schedule-detail-text">

                                            <small>
                                                Jam Praktik
                                            </small>

                                            <strong>

                                                <?= date(
                                                    'H:i',
                                                    strtotime($schedule->start_time)
                                                ); ?>

                                                -

                                                <?= date(
                                                    'H:i',
                                                    strtotime($schedule->end_time)
                                                ); ?>

                                                WIB

                                            </strong>

                                        </div>

                                    </div>


                                </div>



                                <!-- =====================
                                     FOOTER
                                ====================== -->

                                <div class="doctor-schedule-footer">

                                    <div class="doctor-schedule-active">

                                        <span></span>

                                        Jadwal Tersedia

                                    </div>



                                </div>


                            </div>

                        </div>


                    <?php endforeach; ?>


                <?php else : ?>


                    <!-- EMPTY -->

                    <div class="col-12">

                        <div
                            class="doctor-schedule-empty"
                            data-aos="fade-up"
                        >

                            <i class="far fa-calendar-times"></i>

                            <h3>
                                Jadwal Belum Tersedia
                            </h3>

                            <p>
                                Saat ini belum ada jadwal praktik dokter.
                            </p>

                        </div>

                    </div>


                <?php endif; ?>


            </div>


        </div>

    </section>



    <!-- =========================
         CTA
    ========================== -->

    <section class="doctor-schedule-cta">

        <div class="container">

            <div
                class="doctor-schedule-cta-box"
                data-aos="fade-up"
            >

                <div>

                    <span>
                        BUTUH INFORMASI LEBIH LANJUT?
                    </span>

                    <h2>
                        Kami siap membantu Anda.
                    </h2>

                    <p>
                        Hubungi Summit Medical Center untuk informasi
                        lebih lanjut mengenai jadwal dan layanan kami.
                    </p>

                </div>


                <a
                    href="<?= base_url('contact'); ?>"
                    class="doctor-schedule-cta-button"
                >

                    Hubungi Kami

                    <i class="fas fa-arrow-right"></i>

                </a>


            </div>

        </div>

    </section>


</div>